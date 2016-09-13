		<div id="footer">
			GYVUNAI IR KO	
			<style>
    #footer { background-color: #9e9e9e; width: 100%;height: 25px ;bottom:0; position: relative; text-align: center; }
	       </style>
			
			<span id="callback_rezultatas"></span>
		</div>
		<div id="callback">	
			<div class="left_callback">
				<div class="button">
					<img src="http://www.dairybits.co.uk/images/themes/002/buttons/request_callback.png" alt="">
				</div>
			</div>
			<div class="right_callback">
				<form id="callback_forma" action="/" method="post" onsubmit="">
					<span class="notice">Prašome užpildyti formą.</span>
					<label for="cb_name" class="mandatory">Vardas<span class="aster">*</span></label>
					<div class="input_holder"><input id="cb_name" name="vardas" type="text" value="" class="must_be_alphabetic"></div>
					<label for="cb_email" class="mandatory">El.paštas<span class="aster">*</span></label>
					<div class="input_holder"><input id="cb_email" name="emailas" type="text" value=""></div>
					<label for="cb_phone" class="mandatory">Telefono Nr.<span class="aster">*</span></label>
					<div class="input_holder"><input id="cb_phone" name="telefonas" type="text" value=""></div>
					<label for="cb_text">Žinutė<span class="aster">*</span></label>
					<div class="input_holder"><textarea id="cb_text" name="zinute" rows="10" cols="10"></textarea></div>
					<span class="aster_desc"><span class="aster">*</span> Privaloma</span>
					<input type="image" name="submit" src="http://www.dairybits.co.uk/images/themes/002/buttons/submit_enq.png" value="Order" alt="Submit Enquiry">
				</form>
			</div>
		</div>
	</body>
</html>
<?php
$db->close();
?>