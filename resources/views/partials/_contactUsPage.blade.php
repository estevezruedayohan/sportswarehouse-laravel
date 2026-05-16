<div class="welcomeMessage-wrapper">
  <p>
    <strong>"Sports warehouse is coming soon. If you have any questions, we would love to hear from you, please complete
      the following information."</strong>
  </p>

</div>

<form class="form-contact" action="contactUs.php" method="post" novalidate>
  <fieldset>
    <legend>Personal information</legend>

    <div class="form-row">
      <label for="firstName">First name*:</label>
      <input type="text" id="firstName" name="firstName" required {{-- fieldValue("firstName") --}} />
      {{-- fieldError($errors, "firstName") --}}
    </div>

    <div class="form-row">
      <label for="lastName">Last name*:</label>
      <input type="text" id="lastName" name="lastName" required {{-- fieldValue("lastName") --}} />
      {{-- fieldError($errors, "lastName") --}}

    </div>

    <div class="form-row">
      <label for="phoneNumber">Contact Number:</label>
      <input type="tel" id="phoneNumber" name="phoneNumber" inputmode="numeric" required {{-- fieldValue("phoneNumber") --}} />
      {{-- fieldError($errors, "phoneNumber") --}}

    </div>

    <div class="form-row">
      <label for="email">Email*:</label>
      <input type="email" id="email" name="email" placeholder="name@email.com" required {{-- fieldValue("email") --}} />
      {{-- fieldError($errors, "email") --}}

    </div>

    <div class="form-row">
      <label for="questions">Questions ?</label>
      <textarea id="questions" name="questions" cols="30" rows="3" required> {{-- getEncodedValue("questions") --}} </textarea>
      {{-- fieldError($errors, "questions") --}}

    </div>

    <div class="form-actions">

      <button type="submit" name="submitContactUs">Submit</button>

    </div>
  </fieldset>
</form>
