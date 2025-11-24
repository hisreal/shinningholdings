<hr style="border: none; height: 1px; background-color: lavender; width: 100%; margin: 20px auto;">

<div style="font-size: 14px; font-weight: 200" class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-10 text-center">

      <h4 style="letter-spacing:2px; font-size: 14px; color:#6c757d;">
        SIGN UP FOR EMAIL UPDATES
      </h4>

      <form id="subscribeForm" 
      class="d-flex flex-column flex-sm-row justify-content-center align-items-center gap-2">

				<input type="text" 
					name="firstname"
					id="firstname"
					class="form-control"
					style="max-width:250px; height:35px;"
					placeholder="First Name"
					required>

				<input type="email" 
					name="email"
					id="email"
					class="form-control"
					style="max-width:250px; height:35px;"
					placeholder="Your Email"
					required>

				<button type="submit"
						class="btn"
						style="background:#125a52; font-size: 14px; font-weight: 200; color: white; padding: 5px 10px">
				Subscribe
				</button>

			</form>

			<!-- Bootstrap alert shows here -->
			<div id="subscribeAlert" class="mt-3"></div>


    </div>
  </div>
</div>
