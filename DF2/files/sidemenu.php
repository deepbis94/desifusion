	<div class="fixed-view-menu hmenu" onclick="fun1('char')">
		<p>
			<a>Donate</a>
		</p>
	</div>
	<div class="fixed-book-table hmenu" onclick="fun1('book')">
		<p>
			<a >Book table</a>
		</p>
	</div>
	<div id="charity" class="sidemenu">
		<button style="" onclick="fun2('char')">X</button>
	<h1>Donation area</h1>
	<hr>
	</div>

<div id="book" class="sidemenu">
<div style="position: absolute;background-color:black;width: 100%;height: 100%;opacity: 0.5">
</div>
	<div style="" id="bookcontent">	
		<button class="clsbtn" onclick="fun2('book')">X</button>	
		<h1 class="book-header">Book a Table</h1>
		
		<div id="book-step1">
		<h2 class="side-title">Opening times</h2>
		<p class="opening-para">
			Final food service is at 10pm (9pm Sundays and Bank Holidays)<br><br/>
Monday: Closed<br/>
Tuesday - Friday: 5pm-11pm<br/>
Saturday: 12pm-11pm<br/>
Sunday: 12pm-10pm<br/>
All Bank Holidays: 5pm-10pm
		</p>
		<center>
			<button class="proceed-btn1">Click here to make booking</button>
		</center>
		</div>

		<div id="book-step2">

			<h3 class="label">Choose date</h3>
			<center>
			<div id="datepicker"></div>
			<input type="hidden" name="" id="dvalue">
			<input type="hidden" id="range" value="+<?php echo $settings['date_range']; ?>">
			</center>
			<h3 class="label">Select Time</h3>
			<select id="selectTime">
				<?php 
				foreach($time_arr as $t){
				 ?>
	<option value="<?php echo $t; ?>"><?php echo $t; ?></option>		
				<?php
				}
				?>
			</select>

			<br>
			<br>
			<button id="proceed-btn2" class="book-btn">Check availability</button>
		</div>
		<div id="book-step3">

			<h3 class="label">Number of Adults</h3>
			<select id="selectACount">
				<?php 
				for($i=1;$i<$count;$i++){
				 ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>		
				<?php
				}
				?>
			</select>

			<h3 class="label">Number of Children</h3>
			<select id="selectCCount">
				<?php 
				for($i=0;$i<$count;$i++){
				 ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>		
				<?php
				}
				?>
			</select>
			<h3 class="label">Number of Children below age 5</h3>
			<select id="selectBCCount">
				<?php 
				for($i=0;$i<$count;$i++){
				 ?>
<option value="<?php echo $i; ?>"><?php echo $i; ?></option>		
				<?php
				}
				?>
			</select>

			<br><br><br>
			<button id="proceed-btn3" class="book-btn">Check availability</button>
		</div>
		<div id="book-step4">
			<form id="book-form">
			<h3>Name</h3>
			<input type="text" id="c_name" class="book-input" required>
			<h3>Email</h3>
			<input type="email" name="" class="book-input" id="c_email" required>
			<div class="errorbox" id="err_email" id="c_email"></div>
			<h3>Phone</h3>
			<input type="text" name="" class="book-input" required id="c_phone">
			<div class="errorbox" id="err_phone"></div>
			<h3>Select purpose</h3>
<select id="purpose">
				<?php 
				foreach($purp_arr as $p){
				 ?>
<option value="<?php echo $p; ?>"><?php echo $p; ?></option>		
				<?php
				}
				?>
			</select>

			<br><br>
			<button class="book-btn" id="proceed-btn4">Book</button>
			</form>
		</div>
		<div id="book-success">
			<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<center><lottie-player
    src="https://assets5.lottiefiles.com/packages/lf20_LAyqS0.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay >
</lottie-player>
</center>
			<h2>Successfully booked</h2>
			
		</div>
	</div>
	</div>