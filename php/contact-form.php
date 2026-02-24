<?php
$form_message = '';
$form_class = '';
$show_success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $childAge = htmlspecialchars($_POST['childAge'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
    
    if (!empty($name) && !empty($email) && !empty($message)) {
        $to = 'hello@speechwise.com';
        $subject = 'New Contact Form Submission - SpeechWise';
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        $body = "New contact form submission\n";
        $body .= "=======================\n\n";
        $body .= "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Phone: " . ($phone ?: 'Not provided') . "\n";
        $body .= "Child's Age: " . ($childAge ?: 'Not provided') . "\n";
        $body .= "Message: $message\n";
        
        if (mail($to, $subject, $body, $headers)) {
            $show_success = true;
        } else {
            $form_message = 'Sorry, there was an error sending your message. Please try again.';
            $form_class = 'error';
        }
    } else {
        $form_message = 'Please fill in all required fields.';
        $form_class = 'error';
    }
}
?>

                    <?php if ($show_success): ?>
                    <div class="form-success">
                        <div class="success-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" stroke-linecap="round"/>
                                <path d="M22 4 12 14.01l-3-3" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <h3>Message Sent Successfully!</h3>
                        <p>Thank you for reaching out. We'll get back to you within 24 hours.</p>
                        <a href="#contact" class="btn-secondary" onclick="location.reload()">Send Another Message</a>
                    </div>
                    <?php else: ?>
                    <form class="contact-form" id="contactForm" method="POST" action="">
                        <?php if ($form_message): ?>
                            <div class="form-message <?php echo $form_class; ?>">
                                <?php echo $form_message; ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="form-group">
                            <label for="name">Your Name *</label>
                            <input type="text" id="name" name="name" required value="<?php echo $_POST['name'] ?? ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required value="<?php echo $_POST['email'] ?? ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" value="<?php echo $_POST['phone'] ?? ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="childAge">Child's Age</label>
                            <select id="childAge" name="childAge">
                                <option value="">Select age range</option>
                                <option value="2-3" <?php echo (($_POST['childAge'] ?? '') === '2-3') ? 'selected' : ''; ?>>2-3 years</option>
                                <option value="4-5" <?php echo (($_POST['childAge'] ?? '') === '4-5') ? 'selected' : ''; ?>>4-5 years</option>
                                <option value="6-8" <?php echo (($_POST['childAge'] ?? '') === '6-8') ? 'selected' : ''; ?>>6-8 years</option>
                                <option value="9-12" <?php echo (($_POST['childAge'] ?? '') === '9-12') ? 'selected' : ''; ?>>9-12 years</option>
                                <option value="13+" <?php echo (($_POST['childAge'] ?? '') === '13+') ? 'selected' : ''; ?>>13+ years</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">How can we help? *</label>
                            <textarea id="message" name="message" rows="4" required><?php echo $_POST['message'] ?? ''; ?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn-primary btn-full">Send Message</button>
                        </div>
                    </form>
                    <?php endif; ?>
