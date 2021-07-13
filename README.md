# cf7-count-submition
count the contact form 7 form submission

Add above code into your function.php file.
Next, we set up our contact form. We’re going to add a new hidden dynamic field to it using CF7 DTX (https://wordpress.org/plugins/contact-form-7-dynamic-text-extension/) and the new shortcode we just wrote. Here’s what that code would look like in the Contact Form 7 Form Settings:

[dynamichidden cf7-counter "CF7_counter"]

Finally, we want to include the count in the message we receive, so we’ll add it to the CF7 Message Body field:

Count: [cf7-counter]
