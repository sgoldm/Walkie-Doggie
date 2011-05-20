<?php

$title = "Walkie Doggie &amp; Pet Sitter Company | Request Dog Walking and Pet Sitting Services";

$keywords = "walkie doggie, walkie, doggie, dog walking, pet sitting, pet sitter, pet care, evansville, indiana, newburgh, dog walker";

$desc = "Set up a visit with Walkie Doggie &amp; Pet Sitter Company today to learn more about our dog walking and pet sitting services in the Evansville, Indiana area.";

?>
<?php include "../c/pagestart.html" ?>
</head>
<body class="request">
<?php include "../c/bodystart.html" ?>	
	
	<div id="rail" class="photo">
		<img src="/images/photos/patti-walk.jpg" alt="Patti looks forward to her walk every day!" width="385" height="485">
		<a href="#" class="ir" id="psi-badge">Pet Sitters International</a>
	</div>
	
	<div id="content">
		<h1>Request Services</h1>
		<h2 class="ir" id="initial-visit">Initial Visit</h2>
		<p class="larger">We want to make sure you and your pet(s) love us! We also want to meet and learn about your pet(s), obtain a clear understanding of your requests, review our safety standards and <a href="/service-agreement/">pet sitter and dog walker service agreement</a> at no cost to you. You can expect this meeting to usually last no more than 30 minutes.</p>
		<div class="inset">
			<h3 class="ir" id="initial-how-to">How to Set up an Initial Visit:</h3>
			<p>You can request an initial visit for our dog walking and pet sitting services in one or more ways -</p>
			<ul>
			<li>Call us at <strong>(812) 568-5051</strong></li>
			<li>Email us at <strong><a href="mailto:info@walkiedoggie.com">info@walkiedoggie.com</a></strong></li>
			<li>Fill out the short initial visit request form below. Upon submission, 
			we will contact you shortly about your request.</li></ul>
		</div>
		<h2 class="ir" id="initial-visit-form">Initial Visit Request Form</h2>
		<p>Please fill out the information below and we will get back to you within 24 hours regarding our pet sitting and dog walking services.</p>
		<form action="/request-services/request_services.php" method="post" accept-charset="utf-8">
			
			<label>*First Name:</label><input class="text" type="text" name="first_name" value="" id="first_name" tabindex="1">
			<label>*Last Name:</label><input class="text" type="text" name="last_name" value="" id="last_name" tabindex="2">
			<label>*Address:</label><input class="text" type="text" name="address" value="" id="address" tabindex="3">
			<label>*City:</label><input class="text" type="text" name="city" value="" id="city" tabindex="4">
			
			<label>State:</label>
			<select name="state" id="state" size="1" tabindex="5">
				<!-- <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option> -->
                <option value="IN">Indiana</option>
                <!-- <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option> -->
			</select>
					
					<label>Zip:</label><input class="text" type="text" name="zip" value="" id="zip" tabindex="6">
					<label>Phone One:</label><input class="text" type="text" name="phone1" value="" id="phone1" tabindex="7">
					<label>Phone Two:</label><input class="text" type="text" name="phone2" value="" id="phone2" tabindex="8">
					<label>Phone Three:</label><input class="text" type="text" name="phone3" value="" id="phone3" tabindex="9">
					<label>*Email:</label><input class="text" type="text" name="email" value="" id="email" tabindex="10">
					<label>Name of Pet(s):</label><input class="text" type="text" name="pet_names" value="" id="pet_names" tabindex="11">
					<label>Species/Breed of Pet(s):</label><input class="text" type="text" name="pet_species" value="" id="pet_species" tabindex="12">
					
					<label class="textarea">Describe service(s) you would like:</label>
					<textarea name="services_wanted" rows="5" cols="40" tabindex="13"></textarea>
					
					<label class="radio">Do any of your pets have special care needs?</label>
					<input type="radio" name="special_needs" value="Y" id="special_needs_Y"><label class="radio">yes</label>
					<input type="radio" name="special_needs" value="N" id="special_needs_N"><label class="radio">no</label>
					<label class="textarea">If yes, please describe:</label>
					<textarea name="special_needs_desc" rows="5" cols="40" tabindex="14"></textarea>
					
					<label class="textarea">Date(s) and time(s) you would like service(s):</label>
					<textarea name="service_times" rows="2" cols="40" tabindex="15"></textarea>
					
					<label class="textarea">When are you available for an initial visit?:</label>
					<textarea name="visit_time" rows="2" cols="40" tabindex="16"></textarea>
					
					<label>How did you hear about us?</label>
					<select name="heard_from" id="heard_from" size="1">
						<option value="Online">Online</option>
						<option value="Friend">Friend</option>
						<option value="Other">Other</option>
					</select>
					
					<p><input type="submit" value="submit" id="submit"></p>
				</form>
				
			</div> 
		
<?php include "../c/pageend.html" ?>