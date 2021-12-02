<?php $__env->startSection('content'); ?>

<h1>Home Page</h1>

<body>

	<div id="box1"></div>
    	<div id="alert-rectangle"></div>
    	<div id="alert2-rectangle"></div>
    	<div style = "position:absolute; left:560px; top:255px; color:black; font-size:72px; text-decoration: underline; font-weight: bold; font-family: Roboto">
	House Name
      	<!-- Change name based on user input -->
    	</div>

	<div style = "position:absolute; left:40px; top:525px; color:black; font-size:48px; font-weight: bold; font-family: Roboto">
      	Alerts:
    	</div>
    	<!-- display alerts based on user input -->

	<div style = "position:absolute; left:40px; top:725px; color:black; font-size:24px; font-weight: bold; font-family: Roboto">
      	House Reminders:
    	</div>
    	<!-- add vertical line -->
</body>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/camrynreid/Documents/School/CapstoneProject/housemates/resources/views/pages/home-page.blade.php ENDPATH**/ ?>