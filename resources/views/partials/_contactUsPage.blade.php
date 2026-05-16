<div class="welcomeMessage-wrapper">
  <p>
    <strong>"Sports warehouse is coming soon. If you have any questions, we would love to hear from you, please complete
      the following information."</strong>
  </p>

</div>

<form class="form-contact" action="{{ route('contact.submit') }}" method="post" novalidate>

  {{-- Security directive against CSRF attacks, mandatory in Laravel --}}
  @csrf

  <fieldset>
    <legend>Personal information</legend>

    {{-- old('firsName') keep the value if the validation fails --}}
    <div class="form-row">
      <label for="firstName">First name*:</label>
      <input type="text" id="firstName" name="firstName" required value="{{ old('firstName') }}" />
      <x-form-error field="firstName" />
    </div>

    <div class="form-row">
      <label for="lastName">Last name*:</label>
      <input type="text" id="lastName" name="lastName" required value="{{ old('lastName') }}" />
      <x-form-error field="lastName" />

    </div>

    <div class="form-row">
      <label for="phoneNumber">Contact Number:</label>
      <input type="tel" id="phoneNumber" name="phoneNumber" inputmode="numeric" required
        value="{{ old('phoneNumber') }}" />
      <x-form-error field="phoneNumber" />

    </div>

    <div class="form-row">
      <label for="email">Email*:</label>
      <input type="email" id="email" name="email" placeholder="name@email.com" required
        value="{{ old('email') }}" />
      <x-form-error field="email" />

    </div>

    <div class="form-row">
      <label for="questions">Questions ?</label>
      <textarea id="questions" name="questions" cols="30" rows="3" required> {{ old('questions') }} </textarea>
      <x-form-error field="questions" />

    </div>

    <div class="form-actions">

      <button type="submit" name="submitContactUs">Submit</button>

    </div>
  </fieldset>
</form>
