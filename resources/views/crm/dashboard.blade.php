@extends('crm.layout')

@section('title', 'Dashboard | CRM - PHPKolkata')

@section('content')

<!-- Page -->
<div class="page">
	<div class="page-header">
		<h1 class="page-title font-size-26 font-weight-400">Overview</h1>
	</div>

	<div class="page-content container-fluid">
		<div class="row">

			<!-- Third Left -->
			<div class="col-xxl-3">
				<div class="row h-full" data-plugin="matchHeight">
					<div class="col-xxl-12 col-lg-4 col-sm-4">
						<div class="card card-shadow card-completed-options">
							<div class="card-block p-30">
								<div class="row">
									<div class="col-6">
										<div class="counter text-left blue-grey-700">
											<div class="counter-label mt-10">Total Leads
											</div>
											<div class="counter-number font-size-40 mt-10">
												1234
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-12 col-lg-4 col-sm-4">
						<div class="card card-shadow card-completed-options">
							<div class="card-block p-30">
								<div class="row">
									<div class="col-6">
										<div class="counter text-left blue-grey-700">
											<div class="counter-label mt-10">Total Admin
											</div>
											<div class="counter-number font-size-40 mt-10">
												698
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-12 col-lg-4 col-sm-4">
						<div class="card card-shadow card-completed-options">
							<div class="card-block p-30">
								<div class="row">
									<div class="col-6">
										<div class="counter text-left blue-grey-700">
											<div class="counter-label mt-10">Total User
											</div>
											<div class="counter-number font-size-40 mt-10">
												1358
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Third Right -->
			<div class="col-lg-9">
				<div class="card card-shadow table-row">
					<div class="card-block bg-white table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Image</th>
									<th>Product</th>
									<th>Customer</th>
									<th>Purchased On</th>
									<th>Status</th>
									<th>Tracking No#</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td></td>
									<td>iMac</td>
									<td>Russell</td>
									<td>22/08/2018</td>
									<td><span class="badge badge-success font-weight-100">Paid</span></td>
									<td>#98BC85SD84</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="card card-shadow table-row">
					<div class="card-block bg-white table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Image</th>
									<th>Product</th>
									<th>Customer</th>
									<th>Purchased On</th>
									<th>Status</th>
									<th>Tracking No#</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td></td>
									<td>iMac</td>
									<td>Russell</td>
									<td>22/08/2018</td>
									<td><span class="badge badge-success font-weight-100">Paid</span></td>
									<td>#98BC85SD84</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- End Third Left -->
			
		</div>
	</div>
</div>
<!-- End Page -->

@endsection