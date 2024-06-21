<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{Auth::user()->name}} Admin Panel | Exam System</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('user_asset/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('user_asset/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('user_asset/assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('user_asset/assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('user_asset/assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('user_asset/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('user_asset/assets/css/toastr.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{asset('user_asset/global_assets/js/main/jquery.min.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('user_asset/global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js')}}"></script>

	<script src="{{asset('user_asset/global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/demo_pages/form_select2.js')}}"></script>

	<script src="{{asset('user_asset/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>

	<script src="{{asset('user_asset/global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>

	<script src="{{asset('user_asset/assets/js/app.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/demo_pages/datatables_basic.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/demo_pages/form_layouts.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/demo_pages/dashboard.js')}}"></script>
	<!-- /theme JS files -->

	<!-- Theme JS files -->

	<script src="{{asset('user_asset/global_assets/js/demo_pages/job_list.js')}}"></script>
	<!-- /theme JS files -->

	<!-- fontawesome icon -->
	<link rel="stylesheet" href="{{ asset('dashboard/fonts/fontawesome/css/fontawesome-all.min.css') }}">
	<!-- data tables css -->
	<link rel="stylesheet" href="{{ asset('dashboard/plugins/data-tables/css/datatables.min.css') }}">
	<!-- select2 css -->
	<link rel="stylesheet" href="{{ asset('dashboard/plugins/select2/css/select2.min.css') }}">
	<!-- material datetimepicker css -->
	<link rel="stylesheet" href="{{ asset('dashboard/plugins/material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}">
	<!-- minicolors css -->
	<link rel="stylesheet" href="{{ asset('dashboard/plugins/mini-color/css/jquery.minicolors.css') }}">
	<!-- toastr css -->
	<link rel="stylesheet" href="{{ asset('dashboard/plugins/toastr/css/toastr.min.css') }}">

	<style>
		.pdng{
			padding: .9375rem 1.25rem;
		}
	</style>
	@yield('styles')
</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="{{url('/')}}" class="text-light">
				<h3 class="m-0"><b>Admin Panel Menu</b></h3>
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">



				<li class="nav-item dropdown dropdown-user">
					<a href="" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="" class="rounded-circle mr-2" height="34" alt="">
						<span>{{Auth::user()->name}}</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="{{route('logout')}}" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								{{-- <a href="{{asset(Auth::user()->image)}}"><img src="{{asset(Auth::user()->image)}}" width="38" height="38" class="rounded-circle" alt=""></a> --}}
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">{{Auth::user()->name}}</div>
								<div class="font-size-xs opacity-50">MLU
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">
						<!-- Main -->
						<li class="nav-item-header">
							<div class="text-uppercase font-size-xs line-height-xs">Admin Panel</div> <i class="icon-menu" title="Main"></i>
						</li>
						<li class="nav-item">
							<a href="{{route('admin.dashboard.index')}}" class="nav-link {{Request::is('admin/dashboard')?'active':''}}">
								<i class="icon-home4"></i>
								<span>Dashboard</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu {{Request::is('admin/college*') || Request::is('admin/student*') || Request::is('admin/adminuser*') || Request::is('admin/teacher*')?'nav-item-open':''}}">
							<a href="#" class="nav-link"><i class="icon-cart-remove"></i> <span>Users</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts" style="{{Request::is('admin/college*') || Request::is('admin/adminuser*') || Request::is('admin/student*') || Request::is('admin/teacher*')?'display:block':''}}">
								<li class="nav-item"><a href="{{route('admin.college.index')}}" class="nav-link {{Request::is('admin/college')?'active':''}}">College</a></li>
								<li class="nav-item"><a href="{{route('admin.student.index')}}" class="nav-link {{Request::is('admin/student')?'active':''}}">Student</a></li>
								<li class="nav-item"><a href="{{route('admin.teacher.index')}}" class="nav-link {{Request::is('admin/teacher')?'active':''}}">Teacher</a></li>

                                <li class="nav-item"><a href="{{route('admin.AdminUser.list')}}" class="nav-link {{Request::is('admin/adminuser/list')?'active':''}}">Admin User</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu {{Request::is('admin/prospect*')  || Request::is('admin/entrance_fee*') || Request::is('admin/document_category*')  || Request::is('admin/shift*') || Request::is('admin/center_mapping*') || Request::is('admin/exam_center_registration*') ?'nav-item-open':''}}">
							<a href="#" class="nav-link"><i class="icon-cart-remove"></i> <span>Entrance</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Layouts" style="{{Request::is('admin/prospect*') || Request::is('admin/entrance_fee*') || Request::is('admin/center_mapping*') || Request::is('admin/shift*') || Request::is('admin/document_category*') || Request::is('admin/exam_center_registration*')?'display:block':''}}">
								<li class="nav-item"><a href="{{route('admin.prospect.index')}}" class="nav-link {{Request::is('admin/prospect')?'active':''}}">Applicants</a></li>
								<li class="nav-item"><a href="{{route('admin.entrance_fee.index')}}" class="nav-link {{Request::is('admin/entrance_fee')?'active':''}}">Entrance Exams</a></li>
								<li class="nav-item"><a href="{{route('admin.document_category.index')}}" class="nav-link {{Request::is('admin/document_category')?'active':''}}">Document Category</a></li>
								<li class="nav-item"><a href="{{route('admin.exam_center_registration.index')}}" class="nav-link {{Request::is('admin/exam_center_registration')?'active':''}}">Exam Center Registration</a></li>
								<li class="nav-item"><a href="{{route('admin.shift.index')}}" class="nav-link {{Request::is('admin/shift')?'active':''}}">Shift</a></li>
								<li class="nav-item"><a href="{{route('admin.center_mapping.index')}}" class="nav-link {{Request::is('admin/center_mapping')?'active':''}}">Center Mapping</a></li>
							</ul>
						</li>

                        <li class="nav-item nav-item-submenu {{Request::is('admin/add-quiz*') || Request::is('admin/results*') ?'nav-item-open':''}}">
							<a href="#" class="nav-link"><i class="fas fa-chalkboard-teacher"></i> <span>Quiz</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts" style="{{Request::is('admin/add-quiz*') || Request::is('admin/results*') ?'display:block':''}}">

								<li class="nav-item"><a href="{{route('admin.add.quiz')}}" class="nav-link {{Request::is('admin/add-quiz*')?'active':''}}">Add Quiz</a></li>

								<li class="nav-item"><a href="{{route('admin.results')}}" class="nav-link {{Request::is('admin/results*')?'active':''}}">Results</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu {{Request::is('admin/course*') || Request::is('admin/semester*') || Request::is('admin/subject*') ?'nav-item-open':''}}">
							<a href="#" class="nav-link"><i class="icon-books"></i> <span>Academics</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts" style="{{Request::is('admin/course*') || Request::is('admin/semester*') || Request::is('admin/subject*') ?'display:block':''}}">
								<li class="nav-item"><a href="{{route('admin.course.index')}}" class="nav-link {{Request::is('admin/course')?'active':''}}">Course</a></li>
								<li class="nav-item"><a href="{{route('admin.semester.index')}}" class="nav-link {{Request::is('admin/semester')?'active':''}}">Semester</a></li>
								<li class="nav-item"><a href="{{route('admin.subject.index')}}" class="nav-link {{Request::is('admin/subject')?'active':''}}">Subject</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="{{route('admin.Instruction.list')}}" class="nav-link {{Request::is('instruction/list')?'active':''}}">
								<i class="fas fa-info-circle"></i>
								<span>Instructions</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('admin.gateway.index')}}" class="nav-link {{Request::is('admin/gateway')?'active':''}}">
								<i class="icon-file-text"></i>
								<span>Gateway</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('admin.student_attendance.index')}}" class="nav-link {{Request::is('admin/student_attendance')?'active':''}}">
								<i class="icon-file-text"></i>
								<span>Student Attendance</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('admin.roles.index')}}" class="nav-link {{Request::is('admin/roles')?'active':''}}">
								<i class="icon-person"></i>
								<span>Roles</span>
							</a>
						</li>
                        {{-- <li class="nav-item">
							<a href="{{route('admin.Team.list')}}" class="nav-link {{Request::is('admin/team/list')?'active':''}}">
								<i class="fas fa-users"></i>
								<span>Team</span>
							</a>
						</li> --}}

                        <li class="nav-item nav-item-submenu {{Request::is('admin/noticetype*') || Request::is('admin/notice*') ?'nav-item-open':''}}">
							<a href="#" class="nav-link"><i class="fas fa-bullhorn"></i> <span>Notice Board</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts" style="{{Request::is('admin/noticetype*') || Request::is('admin/notice*') ?'display:block':''}}">

								<li class="nav-item"><a href="{{route('admin.NoticeType.list')}}" class="nav-link {{Request::is('admin/noticetype*')?'active':''}}">Notice Type</a></li>

								<li class="nav-item"><a href="{{route('admin.Notice.list')}}" class="nav-link {{Request::is('admin/notice*')?'active':''}}">Notice</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu {{Request::is('admin/exam*') || Request::is('admin/grade*') || Request::is('admin/grade_category*') || Request::is('admin/passed_exam*') || Request::is('admin/board*')  ?'nav-item-open':''}}">
							<a href="#" class="nav-link"><i class="icon-compose"></i> <span>Exam</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts" style="{{Request::is('admin/exam*') || Request::is('admin/grade*') || Request::is('admin/grade_category*') || Request::is('admin/passed_exam*') || Request::is('admin/board*') ?'display:block':''}}">
								<li class="nav-item"><a href="{{route('admin.exam.index')}}" class="nav-link {{Request::is('admin/exam*')?'active':''}}">Exam</a></li>
								<li class="nav-item"><a href="{{route('admin.grade_category.index')}}" class="nav-link {{Request::is('admin/grade_category*')?'active':''}}">Grade Category</a></li>
								<li class="nav-item"><a href="{{route('admin.grade.index')}}" class="nav-link {{Request::is('admin/grade*')?'active':''}}">Grade</a></li>
								<li class="nav-item"><a href="{{route('admin.passed_exam.index')}}" class="nav-link {{Request::is('admin/passed_exam*')?'active':''}}">Passed Exam</a></li>
								<li class="nav-item"><a href="{{route('admin.board.index')}}" class="nav-link {{Request::is('admin/board*')?'active':''}}">Board</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu {{Request::is('admin/country*') || Request::is('admin/state*') || Request::is('admin/city*')  || Request::is('admin/police_station*') ?'nav-item-open':''}}">
							<a href="#" class="nav-link"><i class="icon-map"></i> <span>Locations</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts" style="{{Request::is('admin/country*') || Request::is('admin/state*') || Request::is('admin/city*') || Request::is('admin/police_station*')?'display:block':''}}">
								<li class="nav-item"><a href="{{route('admin.country.index')}}" class="nav-link {{Request::is('admin/country')?'active':''}}">Country</a></li>
								<li class="nav-item"><a href="{{route('admin.state.index')}}" class="nav-link {{Request::is('admin/state')?'active':''}}">State</a></li>
								<li class="nav-item"><a href="{{route('admin.city.index')}}" class="nav-link {{Request::is('admin/city')?'active':''}}">City</a></li>
								<li class="nav-item"><a href="{{route('admin.police_station.index')}}" class="nav-link {{Request::is('admin/police_station')?'active':''}}">Police Station</a></li>
							</ul>
						</li>


						<li class="nav-item nav-item-submenu {{ Request::is('admin/web*') ? 'nav-item-open':'' }}">
							<a href="#!" class="nav-link">
                                <i class="fas fa-globe"></i>
								<span class="pcoded-micon"></span>
								<span class="pcoded-mtext">{{ trans_choice('module_front_web', 2) }}</span>
							</a>
							<ul class="nav nav-group-sub" data-submenu-title="Layouts" style="{{Request::is('admin/web/topbar-setting*') || Request::is('admin/web/social-setting*') || Request::is('admin/web/slider*') || Request::is('admin/web/about-us*') || Request::is('admin/web/feature*') || Request::is('admin/web/web-event*') || Request::is('admin/web/news*') || Request::is('admin/web/faq*') || Request::is('admin/web/gallery*') || Request::is('admin/web/testimonial*') || Request::is('admin/web/page*') || Request::is('admin/web/call-to-action*') || Request::is('admin/web/team*') ?'display:block':''}}">
								<li class="nav-item"><a href="{{ route('admin.topbar-setting.index') }}" class="nav-link {{Request::is('admin/web/topbar-setting')?'active':''}}">{{ trans_choice('module_topbar_setting', 1) }}</a></li>
								<li class="nav-item"><a href="{{ route('admin.social-setting.index') }}" class="nav-link {{Request::is('admin/web/social-setting')?'active':''}}">{{ trans_choice('module_social_setting', 1) }}</a></li>
								<li class="nav-item"><a href="{{ route('admin.slider.index') }}" class="nav-link {{Request::is('admin/web/slider')?'active':''}}">{{ trans_choice('module_slider', 2) }}</a></li>
								<li class="nav-item"><a href="{{ route('admin.about-us.index') }}" class="nav-link {{Request::is('admin/web/about-us')?'active':''}}">{{ trans_choice('module_about_us', 1) }}</a></li>
								<li class="nav-item"><a href="{{ route('admin.feature.index') }}" class="nav-link {{Request::is('admin/web/feature')?'active':''}}">{{ trans_choice('module_feature', 2) }}</a></li>
								<!-- <li class="nav-item"><a href="{{ route('admin.course.index') }}" class="nav-link {{Request::is('admin/web/course')?'active':''}}">{{ trans_choice('module_course', 2) }}</a></li> -->
								<li class="nav-item"><a href="{{ route('admin.web-event.index') }}" class="nav-link {{Request::is('admin/web/web-event')?'active':''}}">{{ trans_choice('module_event', 2) }}</a></li>

                                <li class="nav-item"><a href="{{ route('admin.Team.list') }}" class="nav-link {{Request::is('admin/web/team/list')?'active':''}}">{{ trans_choice('Team', 2) }}</a></li>

								<li class="nav-item"><a href="{{ route('admin.news.index') }}" class="nav-link {{Request::is('admin/web/news')?'active':''}}">{{ trans_choice('module_news', 2) }}</a></li>
								<li class="nav-item"><a href="{{ route('admin.faq.index') }}" class="nav-link {{Request::is('admin/web/faq')?'active':''}}">{{ trans_choice('module_faq', 2) }}</a></li>
								<li class="nav-item"><a href="{{ route('admin.gallery.index') }}" class="nav-link {{Request::is('admin/web/gallery')?'active':''}}">{{ trans_choice('module_gallery', 2) }}</a></li>
								<li class="nav-item"><a href="{{ route('admin.testimonial.index') }}" class="nav-link {{Request::is('admin/web/testimonial')?'active':''}}">{{ trans_choice('module_testimonial', 2) }}</a></li>
								<li class="nav-item"><a href="{{ route('admin.page.index') }}" class="nav-link {{Request::is('admin/web/page')?'active':''}}">Pages</a></li>
								<li class="nav-item"><a href="{{ route('admin.call-to-action.index') }}" class="nav-link {{Request::is('admin/web/call-to-action')?'active':''}}">{{ trans_choice('module_call_to_action', 1) }}</a></li>
								<li class="nav-item"><a href="{{ route('admin.menu.index') }}" class="nav-link {{Request::is('admin/web/menu')?'active':''}}">Menu</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->

		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><a href="{{route('admin.dashboard.index')}}"><i class="icon-arrow-left52 mr-2"></i></a><span class="font-weight-semibold">@yield('title')</span></h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">

							<a href="#" class="btn btn-float mt-3">
								<h4><span id="ct" class="font-weight-semibold"></span></h4>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				@yield('content')

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text ml-lg-auto">

					</span>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
	<!-- Required Js -->
	<script src="{{ asset('dashboard/plugins/jquery/js/jquery.min.js') }}"></script>
	<script src="{{ asset('dashboard/plugins/popper/js/popper.min.js') }}"></script>
	<script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('dashboard/plugins/jquery-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
	<script src="{{ asset('dashboard/js/pcoded.min.js') }}"></script>

	<!-- datatable Js -->
	<script src="{{ asset('dashboard/plugins/data-tables/js/datatables.min.js') }}"></script>

	<!-- form-validation Js -->
	<script src="{{ asset('dashboard/js/pages/form-validation.js') }}"></script>

	<!-- select2 Js -->
	<script src="{{ asset('dashboard/plugins/select2/js/select2.full.min.js') }}"></script>

	<!-- material datetimepicker Js -->
	<script src="{{ asset('dashboard/plugins/moment/js/moment-with-locales.min.js') }}"></script>
	<script src="{{ asset('dashboard/plugins/material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

	<!-- Input mask Js -->
	<script src="{{ asset('dashboard/plugins/inputmask/js/autoNumeric.js') }}"></script>

	<!-- minicolors Js -->
	<script src="{{ asset('dashboard/plugins/mini-color/js/jquery.minicolors.min.js') }}"></script>

	<!-- toastr Js -->
	<script src="{{ asset('dashboard/plugins/toastr/js/toastr.min.js') }}"></script>

	<script type="text/javascript">
		@if($errors -> any())
		@foreach($errors -> all() as $error)
		toastr["error"]("{{ $error }}");
		@endforeach
		@endif
	</script>

	<!-- Print Js -->
	<script src="{{ asset('dashboard/plugins/print/js/jQuery.print.min.js') }}"></script>
	<script type="text/javascript">
		$(function() {
			"use strict";
			$("html").find('.btn-print').on('click', function() {
				$.print(".printable");
			});
		});
	</script>

	<!-- Popup Window Js -->
	<script type="text/javascript">
		"use strict";

		function PopupWin(pageURL, pageTitle, popupWinWidth, popupWinHeight) {
			var left = (screen.width - popupWinWidth) / 2;
			var top = (screen.height - popupWinHeight) / 4;

			var myWindow = window.open(pageURL, pageTitle, 'resizable=yes, width=' + popupWinWidth + ', height=' + popupWinHeight + ', top=' + top + ', left=' + left);
		};
	</script>


	<!-- page js -->
	@yield('page_js')
	@yield('scripts')


	<script type="text/javascript">
		'use strict';
		$(document).ready(function() {
			// [ Single Select ] start
			$(".select2").select2();

			// [ Multi Select ] start
			$(".select2-multiple").select2({
				placeholder: "{{ __('select') }}"
			});

			// Date Picker
			$('.date').bootstrapMaterialDatePicker({
				setDate: new Date(),
				weekStart: 0,
				time: false
			});

			// Time Picker
			$('.time').bootstrapMaterialDatePicker({
				date: false,
				shortTime: true,
				format: 'HH:mm'
			});

			// Color Picker
			$('.color_picker').each(function() {
				$(this).minicolors({
					control: $(this).attr('data-control') || 'hue',
					defaultValue: $(this).attr('data-defaultValue') || '',
					format: $(this).attr('data-format') || 'hex',
					keywords: $(this).attr('data-keywords') || '',
					inline: $(this).attr('data-inline') === 'true',
					letterCase: $(this).attr('data-letterCase') || 'lowercase',
					opacity: $(this).attr('data-opacity'),
					position: $(this).attr('data-position') || 'bottom',
					swatches: $(this).attr('data-swatches') ? $(this).attr('data-swatches').split('|') : [],
					change: function(value, opacity) {
						if (!value) return;
						if (opacity) value += ', ' + opacity;
						if (typeof console === 'object') {}
					},
					theme: 'bootstrap'
				});
			});

			// Number Musk
			// $('.autonumber').autoNumeric('init');
			new AutoNumeric('.autonumber', {
				minimumValue: '0',
				maximumValue: '999999999',
				decimalPlaces: 0,
				decimalCharacter: '.',
				digitGroupSeparator: '',
			});
		});
	</script>

	<script type="text/javascript">
		'use strict';
		$(document).ready(function() {
			// [ Zero-configuration ] start
			$('#basic-table').DataTable();
			$('#basic-table2').DataTable();

			// [ HTML5-Export ] start
			$('#export-table').DataTable({
				dom: 'Bfrtip',
				buttons: [{
						extend: 'copyHtml5',
						text: '<i class="fas fa-copy"></i>',
						footer: true,
						exportOptions: {
							columns: ':not(:last-child)',
						}
					},
					{
						extend: 'excelHtml5',
						text: '<i class="fas fa-file-excel"></i>',
						footer: true,
						exportOptions: {
							columns: ':not(:last-child)',
						}
					},
					{
						extend: 'csvHtml5',
						text: '<i class="fas fa-file"></i>',
						footer: true,
						exportOptions: {
							columns: ':not(:last-child)',
						}
					},
					{
						extend: 'pdfHtml5',
						text: '<i class="fas fa-file-pdf"></i>',
						footer: true,
						exportOptions: {
							columns: ':not(:last-child)',
						}
					},
					{
						extend: 'print',
						text: '<i class="fas fa-print"></i>',
						autoPrint: true,
						// title: '',
						footer: true,
						exportOptions: {
							columns: ':not(:last-child)',
						},
						customize: function(win) {
							$(win.document.body)
								.css('font-size', '10pt')
							/*.prepend(
								'<img src="http://datatables.net/media/images/logo-fade.png" style="position:absolute; top:0; left:0;" />'
							);*/

							$(win.document.body).find('table')
								.addClass('compact')
								.css('font-size', 'inherit');

							$(win.document.body).find('caption')
								.css('font-size', '10px');

							$(win.document.body).find('h1')
								.css({
									"text-align": "center",
									"font-size": "16pt"
								});
						}
					}
				]
			});
		});
	</script>

	{{-- Set Cookie --}}
	<script type="text/javascript">
		"use strict";
		$(document).ready(function() {
			$("#mobile-collapse").on("click", function(e) {
				e.preventDefault();
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
					}
				});
				$.ajax({
					url: "{{ route('setCookie') }}",
					method: 'get',
					data: {},
					success: function(result) {
						console.log(result.data);
					}
				});
			});
		});
	</script>


	{{-- Text Editors --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.3/tinymce.min.js"></script>

	@php
	$version = App\Models\Language::version();
	@endphp
	@if($version->direction == 1)
	<script type="text/javascript">
		"use strict";
		tinymce.init({
			selector: '.texteditor',

			height: 200,
			setup: function(editor) {
				editor.on('init change', function() {
					editor.save();
				});
			},

			directionality: 'rtl',
			language: '{{ $version->code }}',
		});
	</script>
	@else
	<script type="text/javascript">
		"use strict";
		tinymce.init({
			selector: '.texteditor',

			height: 200,
			setup: function(editor) {
				editor.on('init change', function() {
					editor.save();
				});
			},

			directionality: 'ltr',
			language: '{{ $version->code }}',
		});
	</script>
	@endif
</body>

</html>
