<div
	class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
	<div class="d-block mb-4 mb-md-0">
		<nav
			aria-label="breadcrumb"
			class="d-none d-md-inline-block">
			<ol
				class="breadcrumb breadcrumb-dark breadcrumb-transparent">
				<li class="breadcrumb-item">
					<a href="<?= base_url('admin') ?>">
						<svg
							class="icon icon-xxs"
							fill="none"
							stroke="currentColor"
							viewBox="0 0 24 24"
							xmlns="http://www.w3.org/2000/svg">
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="2"
								d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
						</svg>
					</a>
				</li>
				<li class="breadcrumb-item">
					<a href="<?= base_url('admin/users') ?>">Users</a>
				</li>
				<li
					class="breadcrumb-item active"
					aria-current="page">
					List User
				</li>
			</ol>
		</nav>
		<h2 class="h4">All Users</h2>
		<p class="mb-0">Your users list.</p>
	</div>
	<div class="btn-toolbar mb-2 mb-md-0">
		<a
			href="#"
			class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
			<svg
				class="icon icon-xs me-2"
				fill="none"
				stroke="currentColor"
				viewBox="0 0 24 24"
				xmlns="http://www.w3.org/2000/svg">
				<path
					stroke-linecap="round"
					stroke-linejoin="round"
					stroke-width="2"
					d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
			</svg>
			New User
		</a>
		<div class="btn-group ms-2 ms-lg-3">
			<button
				type="button"
				class="btn btn-sm btn-outline-gray-600">
				Share
			</button>
			<button
				type="button"
				class="btn btn-sm btn-outline-gray-600">
				Export
			</button>
		</div>
	</div>
</div>
<div class="table-settings mb-4">
	<div class="row align-items-center justify-content-between">
		<div class="col col-md-6 col-lg-3 col-xl-4">
			<div class="input-group me-2 me-lg-3 fmxw-400">
				<span class="input-group-text">
					<svg
						class="icon icon-xs"
						x-description="Heroicon name: solid/search"
						xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 20 20"
						fill="currentColor"
						aria-hidden="true">
						<path
							fill-rule="evenodd"
							d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
							clip-rule="evenodd"></path>
					</svg>
				</span>
				<input
					type="text"
					class="form-control"
					placeholder="Search users" />
			</div>
		</div>
		<div class="col-4 col-md-2 col-xl-1 ps-md-0 text-end">
			<div class="dropdown">
				<button
					class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-1"
					data-bs-toggle="dropdown"
					aria-haspopup="true"
					aria-expanded="false">
					<svg
						class="icon icon-sm"
						fill="currentColor"
						viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg">
						<path
							fill-rule="evenodd"
							d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
							clip-rule="evenodd"></path>
					</svg>
					<span class="visually-hidden">Toggle Dropdown</span>
				</button>
				<div
					class="dropdown-menu dropdown-menu-xs dropdown-menu-end pb-0">
					<span class="small ps-3 fw-bold text-dark">Show</span>
					<a
						class="dropdown-item d-flex align-items-center fw-bold"
						href="#">10
						<svg
							class="icon icon-xxs ms-auto"
							fill="currentColor"
							viewBox="0 0 20 20"
							xmlns="http://www.w3.org/2000/svg">
							<path
								fill-rule="evenodd"
								d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
								clip-rule="evenodd"></path>
						</svg>
					</a>
					<a class="dropdown-item fw-bold" href="#">20</a>
					<a
						class="dropdown-item fw-bold rounded-bottom"
						href="#">30
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div
	class="card card-body border-0 shadow table-wrapper table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th class="border-gray-200">#</th>
				<th class="border-gray-200">Username</th>
				<th class="border-gray-200">Status</th>
				<th class="border-gray-200">Action</th>
			</tr>
		</thead>
		<tbody>
			<!-- Item -->
			<tr>
				<td>
					<a href="#" class="fw-bold"> 456478 </a>
				</td>
				<td>
					<span class="fw-normal">Idnasirasira</span>
				</td>
				<td>
					<span class="fw-bold text-success">Active</span>
				</td>
				<td>
					<div class="btn-group"><button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
							</svg> <span class="visually-hidden">Toggle Dropdown</span></button>
						<div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1"><a class="dropdown-item d-flex align-items-center" href="#"><svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z" clip-rule="evenodd"></path>
								</svg> Reset Pass </a><a class="dropdown-item d-flex align-items-center" href="#"><svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
									<path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
								</svg> View Details </a><a class="dropdown-item d-flex align-items-center" href="#"><svg class="dropdown-icon text-danger me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path d="M11 6a3 3 0 11-6 0 3 3 0 016 0zM14 17a6 6 0 00-12 0h12zM13 8a1 1 0 100 2h4a1 1 0 100-2h-4z"></path>
								</svg> Suspend</a></div>
					</div><svg class="icon icon-xs text-danger ms-1" title="" data-bs-toggle="tooltip" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-bs-original-title="Delete" aria-label="Delete">
						<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
					</svg>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
		<nav aria-label="Page navigation example">
			<ul class="pagination mb-0">
				<li class="page-item">
					<a class="page-link" href="#">Previous</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">1</a>
				</li>
				<li class="page-item active">
					<a class="page-link" href="#">2</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">3</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">4</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">5</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</nav>
		<div class="fw-normal small mt-4 mt-lg-0">
			Showing <b>5</b> out of <b>25</b> entries
		</div>
	</div>
</div>
