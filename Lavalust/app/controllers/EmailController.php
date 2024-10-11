<?php
class EmailController extends Controller {

    public function sendEmail() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $subject = $_POST['subject'] ?? '';
            $message = $_POST['message'] ?? '';
            $attach = $_FILES['attachment'];
            $sender = $_POST['sender'] ?? '';
    
            if (empty($email) || empty($subject) || empty($message) || empty($sender)) {
                echo "Please fill in all required fields.";
                return;
            }
    
            $mail = new Email();
            try {
                $this->call->library('email');
                $this->email->recipient($email);
                $this->email->subject($subject);
                $this->email->email_content($message, 'html'); 
                $this->call->library('upload', $attach);
                $this->email->sender($sender);
    
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
                return;
            }
    
            if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === UPLOAD_ERR_OK) {
                $upload = new Upload($_FILES['attachment']);
                $filePath = 'uploads/'; 
                $upload->set_dir($filePath);

                if ($upload->do_upload()) {
                    $attachmentPath = $upload->get_dir() . $upload->get_filename();
                    $mail->attachment($attachmentPath); 
                    $this->email->recipient($email);
                    $this->email->subject($subject);
                    $this->email->email_content($message, 'html'); 
                    $this->email->attachment($attachmentPath);
                    $this->email->sender($sender);

                } else {
                    foreach ($upload->get_errors() as $error) {
                        echo $error . '<br>';
                    }
                    return;
                }
            }
    
            if ($this->email->send()) {
                echo "Email sent successfully!";
            } else {
                echo "Failed to send email. Please check server settings.";
            }
        } else {
            $this->view('send'); 
        }
    }    
}
