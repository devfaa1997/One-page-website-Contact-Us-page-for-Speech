<?php
$newsletter_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['newsletter_email'])) {
    $email = htmlspecialchars($_POST['newsletter_email'] ?? '');
    
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = 'hello@speechwise.com';
        $subject = 'New Newsletter Subscription';
        $headers = "From: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        $body = "New newsletter subscription\n";
        $body .= "Email: $email\n";
        
        if (mail($to, $subject, $body, $headers)) {
            $newsletter_message = 'Thank you for subscribing!';
        } else {
            $newsletter_message = 'Something went wrong. Please try again.';
        }
    } else {
        $newsletter_message = 'Please enter a valid email.';
    }
}
?>

                    <form class="newsletter-form" method="POST" action="">
                        <?php if ($newsletter_message): ?>
                            <div class="newsletter-message"><?php echo $newsletter_message; ?></div>
                        <?php endif; ?>
                        <input type="email" name="newsletter_email" placeholder="Your email" required>
                        <button type="submit">Subscribe</button>
                    </form>
