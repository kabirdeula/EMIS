
<div class="card shadow mb-4">
    <div class="card-body p-5">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" class="my-4">

            <h1 class="h4 text-secondary">Student Details</h1>

            <div class="form-group row">

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="FirstName" class="form-control <?php echo (!empty($FirstNameError)) ? 'border-danger' : ''; ?>" value="<?php echo $FirstName; ?>" placeholder="First Name">
                    <span class="text-danger"><?php echo $FirstNameError; ?></span>
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="MiddleName" class="form-control" placeholder="Middle Name" value="<?php echo $MiddleName; ?>">
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="LastName" class="form-control <?php echo (!empty($LastNameError)) ? 'border-danger' : ''; ?>" placeholder="Last Name" value="<?php echo $LastName; ?>">
                    <span class="text-danger"><?php echo $LastNameError ?></span>
                </div>
            </div>

            <div class="form-group row">

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="PermanentAddress" class="form-control <?php echo (!empty($PermanentAddressError)) ? 'border-danger' : ''; ?>" placeholder="Permanent Address" value="<?php echo $PermanentAddress; ?>">
                    <span class="text-danger"><?php echo $PermanentAddressError; ?></span>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="TemporaryAddress" class="form-control <?php echo (!empty($TemporaryAddressError)) ? 'border-danger' : ''; ?>" placeholder="Temporary Address" value="<?php echo $TemporaryAddress; ?>">
                    <span class="text-danger"><?php echo $TemporaryAddressError; ?></span>
                </div>
            </div>

            <div class="form-group row">

                <div class="col-sm-4 mb-3 mb-sm-0">

                    <?php foreach ($gender as $key => $value) : ?>
                        <input type="radio" name="Gender" id="gender_<?php echo $key ?>" value="<?php echo $key ?>">
                        <label for="gender_<?php echo $key ?>" class="mr-4 mt-2"><?php echo $value; ?></label>
                    <?php endforeach ?>
                    <span class="text-danger"><?php echo $GenderError; ?></span>
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="number" name="Mobile" class="form-control <?php echo (!empty($MobileError)) ? 'border-danger' : ''; ?>" placeholder="Mobile Number" value="<?php echo $Mobile; ?>">
                    <span class="text-danger"><?php echo $MobileError; ?></span>
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="Email" class="form-control <?php echo (!empty($EmailError)) ? 'border-danger' : ''; ?>" placeholder="Email" value="<?php echo $Email; ?>">
                    <span class="text-danger"><?php echo $EmailError; ?></span>
                </div>

            </div>

            <div class="form-group row">

                <div class="col-sm-3 mb-3 mb-sm-0">
                    <input type="text" name="Faculty" class="form-control <?php echo (!empty($FacultyError)) ? 'border-danger' : ''; ?>" placeholder="Faculty" value="<?php echo $Faculty; ?>">
                    <span class="text-danger"><?php echo $FacultyError ?></span>
                </div>

                <div class="col-sm-3 mb-3 mb-sm-0">
                    <input type="text" name="Level" class="form-control <?php echo (!empty($LevelError)) ? 'border-danger' : ''; ?>" placeholder="Level" value="<?php echo $Level; ?>">
                    <span class="text-danger"><?php echo $LevelError; ?></span>
                </div>

                <div class="col-sm-3 mb-3 mb-sm-0">
                    <input type="text" name="Program" class="form-control <?php echo (!empty($ProgramError)) ? 'border-danger' : ''; ?>" placeholder="Program" value="<?php echo $Program; ?>">
                    <span class="text-danger"><?php echo $ProgramError; ?></span>
                </div>

                <div class="col-sm-3 mb-3 mb-sm-0">
                    <input type="text" name="Semester" class="form-control <?php echo (!empty($SemesterError)) ? 'border-danger' : ''; ?>" placeholder="Semester" value="<?php echo $Semester; ?>">
                    <span class="text-danger"><?php echo $SemesterError; ?></span>
                </div>

            </div>

            <hr>
            <h1 class="h4 text-secondary">Parent Details</h1>
            <div class="form-group row">

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="FatherName" class="form-control <?php echo (!empty($FatherNameError)) ? 'border-danger' : ''; ?>" placeholder="Father's Name" value="<?php echo $FatherName; ?>">
                    <span class="text-danger"><?php echo $FatherNameError; ?></span>
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="FatherOccupation" class="form-control <?php echo (!empty($FatherOccupationError)) ? 'border-danger' : ''; ?>" placeholder="Father's Occupation" value="<?php echo $FatherOccupation; ?>">
                    <span class="text-danger"><?php echo $FatherOccupationError; ?></span>
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="number" name="FatherMobile" class="form-control <?php echo (!empty($FatherMobileError)) ? 'border-danger' : ''; ?>" placeholder="Father's Mobile Number" value="<?php echo $FatherMobile; ?>">
                    <span class="text-danger"><?php echo $FatherMobileError; ?></span>
                </div>
            </div>

            <div class="form-group row">

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="MotherName" class="form-control <?php echo (!empty($MotherNameError)) ? 'border-danger' : ''; ?>" placeholder="Mother's Name" value="<?php echo $MotherName; ?>">
                    <span class="text-danger"><?php echo $MotherNameError; ?></span>
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="MotherOccupation" class="form-control <?php echo (!empty($MotherOccupationError)) ? 'border-danger' : ''; ?>" placeholder="Mother's Occupation" value="<?php echo $MotherOccupation; ?>">
                    <span class="text-danger"><?php echo $MotherOccupationError; ?></span>
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="number" name="MotherMobile" class="form-control <?php echo (!empty($MotherMobileError)) ? 'border-danger' : ''; ?>" placeholder="Mother's Mobile Number" value="<?php echo $MotherMobile; ?>">
                    <span class="text-danger"><?php echo $MotherMobileError; ?></span>
                </div>
            </div>

            <div class="form-group row">

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="GuardianName" class="form-control" placeholder="Guardian's Name">
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="GuardianOccupation" class="form-control" placeholder="Guardian's Occupation">
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="number" name="GuardianMobile" class="form-control" placeholder="Guardian's Mobile Number">
                </div>
            </div>

            <div class="form-group row">

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="SpouseName" class="form-control" placeholder="Spouse's Name">
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="SpouseOccupation" class="form-control" placeholder="Spouse's Occupation">
                </div>

                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="number" name="SpouseMobile" class="form-control" placeholder="Spouse's Mobile Number">
                </div>
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Submit" name="register">
        </form>
    </div>
</div>
</div>

<!-- End Page Content -->
</div>
<?php include 'footer.php'; ?>
</body>

</html>
