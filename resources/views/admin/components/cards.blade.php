<div class="row">

    <!-- Total Users Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs fw-bold text-primary text-uppercase mb-1">
                            Users
                        </div>
                        <div class="h5 mb-0 fw-bold text-gray-800">
                            {{ $user_count }}
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="las la-user fs-1 text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Students Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs fw-bold text-secondary text-uppercase mb-1">
                            Students
                        </div>
                        <div class="h5 mb-0 fw-bold text-gray-800">
                            {{ $student_count }}
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="las la-user-graduate fs-1 text-secondary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Teachers Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs fw-bold text-success text-uppercase mb-1">
                            Teachers
                        </div>
                        <div class="h5 mb-0 fw-bold text-gray-800">
                            {{ $teacher_count }}
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="las la-chalkboard-teacher fs-1 text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Programs Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs fw-bold text-info text-uppercase mb-1">
                            Programs
                        </div>
                        <div class="h5 mb-0 fw-bold text-gray-800">
                            {{ $program_count }}
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="las la-briefcase fs-1 text-info"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
