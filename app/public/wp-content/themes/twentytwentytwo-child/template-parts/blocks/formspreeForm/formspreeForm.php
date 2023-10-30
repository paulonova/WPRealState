<?php 

$formId = get_field('form_id');

?>

<div>
  <h4>Formspree Form</h4>
  <div>
    <p>Check your form submission <a target="_blank"
        href="https://formspree.io/forms/<?php echo $formId; ?>/submissions"> Here</a>
    </p>
  </div>
</div>