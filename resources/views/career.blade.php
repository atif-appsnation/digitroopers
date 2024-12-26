@extends('app.main')
@section('content')

	<!--Breadcrumb Area-->
	<section class="breadcrumb-area banner-001">
		<div class="text-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 v-center">
						<!-- <div class="bread-inner">
							<div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="#">Career</a></li>
								</ul>
							</div>
							<div class="bread-title wow fadeInUp" data-wow-delay=".5s">
								<h2>Job Openings</h2> </div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Breadcrumb Area-->

	<!--Start About-->
	<section class="career py-5 block-1 dark-bg3">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<h4>Use this form to apply at Digi Troopers, Beyond &amp; Huddle Co-working.</h4>
							<form action="{{route('applicant')}}" class="mt-3" method="post" enctype="multipart/form-data">
								@csrf
								<div class="form-group">
									<label for="name">Your Full Name: <span class="asterick">*</span></label>
									<input type="text" name="name" class="form-control" placeholder="" id="name" required> </div>
								<div class="form-group">
									<label for="email">Your Email: <span class="asterick">*</span></label>
									<input type="email" name="email" class="form-control" placeholder="" id="email" required> </div>
								<div class="form-group">
									<label for="phone">Phone Number: <span class="asterick">*</span></label>
									<input type="tel" name="phone" class="form-control" placeholder="" id="phone" required> </div>
								<div class="form-group">
									<label for="job">Job Role Applying for:</label>
									<select name="job" class="custom-select">
										<option selected>Select</option>
										<option value="Graphic Designer">Graphic Designer</option>
										<option value="Content Writer">Content Writer</option>
										<option value="Website Developer">Website Developer</option>
										<option value="SEO Specialist">SEO Specialist</option>
										<option value="Social Media Manager">Social Media Manager</option>
										<option value="Ads Specialized">Ads Specialized</option>
										<option value="Email Marketer">Email Marketer</option>
										<option value="Project Manager">Project Manager</option>
										<option value="QA">QA</option>
										<option value="Accountant">Accountant</option>
										<option value="Business Development">Business Development</option>
									</select>
								</div>
								<div class="form-group">
									<label for="position">Position:</label>
									<br>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="position" id="inlineRadio1" value="Full Time">
										<label class="form-check-label" for="inlineRadio1">Full Time</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="position" id="inlineRadio2" value="Part Time">
										<label class="form-check-label" for="inlineRadio2">Part Time</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="position" id="inlineRadio3" value="Internship">
										<label class="form-check-label" for="inlineRadio3">Internship</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="position" id="inlineRadio3" value="Remote">
										<label class="form-check-label" for="inlineRadio3">Remote</label>
									</div>
								</div>
								<div class="custom-file">
									<p>Attach your CV (Max 1.5MB)</p>
									<input type="file"  class="custom-file-input" id="customFile" name="filename">
									<label class="custom-file-label" for="customFile">Choose file</label>
								</div>
								<!-- <div class="form-group form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="checkbox"> I hereby accept that the data provided by me via this form is collected and stored to process my application </label>
								</div> -->
								<button type="submit" name="submit" class="btn btn-primary btn-main bg-btn2">Submit <i class="fas fa-chevron-right fa-icon"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End About-->
@endsection