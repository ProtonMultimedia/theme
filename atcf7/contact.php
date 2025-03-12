<?php
if (!defined('ABSPATH')) {
  exit;
}
/**
 * Template Name: contact
 * */
?>

<div class="form-basic form-contact">
  <div class="flex basis">
    <div class="left-col basis-1/3">
      <div class="radio">
        1. Wybierz typ usługi:
        [radio your-sports label_first default:2 "DOM" "BIZNES"]
      </div>

      <div class="select">
        2. Wybierz usługę:
        [select* your-browser include_blank "Wdrozenia i opieka nad serweremi" "Systemy alarmowe" "Outsourcing" "Automatyka"]
      </div>
    </div>

    <div class="right-col basis-2/3">


      <div class="mb-2.5">
        3. Wypełnij formularz:

        [text* your-name placeholder "IMIĘ I NAZWISKO"]

        [email* your-email placeholder "EMAIL"]

        [tel* your-phone placeholder "NUMER TELEFONU"]
      </div>

      <div class="message-container w-full">
        [textarea your-message x3 placeholder "WIADOMOŚĆ"]
      </div>

      <div class="max-w-[520px] mb-5 [&_a]:!text-white hover:[&_a]:!text-white [&_input]:!accent-secondary">
        <div class="mb-5 ">
          [acceptance privacy-policy]
          Lorem ipsum dolor sit amet consectetur. Sit sit nisi sit venenatis elit. Purus ipsum vitae massa ullamcorper quis sit ultricies interdum. Diam nunc nisl mattis eleifend nec potenti vitae proin. Cursus non aliquam eget eros turpis.
          [/acceptance]
        </div>
      </div>

      <div class="relative pm-button pm-button--primary flex [&_p]:w-fit text-center max-w-full w-fit ml-auto [&_.wpcf7-spinner]:absolute [&_.wpcf7-spinner]:right-[-12px] [&_.wpcf7-spinner]:top-2.5 ">
        [submit class:btn-primary "Wyślij wiadomość"]
      </div>
    </div>
  </div>

</div>