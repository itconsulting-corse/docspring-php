<?php

namespace DocSpring;

class Client extends Api\PDFApi
{
    /**
     * Operation generatePDF
     *
     * Generates a new PDF
     *
     * @param  string $template_id template_id (required)
     * @param  \DocSpring\Model\SubmissionData $create_submission_body create_submission_body (optional)
     * @param  integer $timeout (optional)
     *
     * @throws \DocSpring\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \DocSpring\Model\Submission
     */
    public function generatePDF($template_id, $create_submission_body = null, $timeout = 60)
    {
        $generate_response = parent::generatePDF($template_id, $create_submission_body);
        $submission = $generate_response->getSubmission();

        while ($submission->getState() == 'pending') {
          sleep(1);
          $submission = parent::getSubmission($submission->getId());
          $timeout--;
          if ($timeout < 0) {
            throw new ApiException(
                "Timeout Error: PDF was not processed within " . $timeout . " seconds."
            );
          }
        }
        return $submission;
    }

    /**
     * Operation combineSubmissions
     *
     * Merge generated PDFs together
     *
     * @param  \DocSpring\Model\CombinedSubmissionData $combined_submission_data combined_submission_data (optional)
     *
     * @throws \DocSpring\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \DocSpring\Model\CreateCombinedSubmissionResponse|\DocSpring\Model\Error|\DocSpring\Model\AuthenticationError|\DocSpring\Model\InvalidRequest
     */
    public function combineSubmissions($combined_submission_data = null, $timeout = 60)
    {
        $combine_response = parent::combineSubmissions($combined_submission_data);
        $combined_submission = $combine_response->getCombinedSubmission();
        $id = $combined_submission->getId();
        while ($combined_submission->getState() == 'pending') {
          sleep(1);
          $combined_submission = parent::getCombinedSubmission($id);
          $timeout--;
          if ($timeout < 0) {
            throw new ApiException(
                "Timeout Error: PDF was not processed within " . $timeout . " seconds."
            );
          }
        }
        return $combined_submission;
    }

    /**
     * Operation combinePdfs
     *
     * Merge submission PDFs, template PDFs, or custom files
     *
     * @param  \DocSpring\Model\CombinePdfsData $combine_pdfs_data combine_pdfs_data (required)
     *
     * @throws \DocSpring\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \DocSpring\Model\CreateCombinedSubmissionResponse|\DocSpring\Model\Error|\DocSpring\Model\AuthenticationError|\DocSpring\Model\InvalidRequest
     */
    public function combinePdfs($combine_pdfs_data = null, $timeout = 60)
    {
        $combine_response = parent::combinePdfs($combine_pdfs_data);
        $combined_submission = $combine_response->getCombinedSubmission();
        $id = $combined_submission->getId();
        while ($combined_submission->getState() == 'pending') {
          sleep(1);
          $combined_submission = parent::getCombinedSubmission($id);
          $timeout--;
          if ($timeout < 0) {
            throw new ApiException(
                "Timeout Error: PDF was not processed within " . $timeout . " seconds."
            );
          }
        }
        return $combined_submission;
    }
}
