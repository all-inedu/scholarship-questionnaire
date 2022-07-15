
<?php $__env->startSection('content'); ?>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet" />
    <div class="container body-color">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="row" style="justify-content: center;margin-bottom:1rem">
                    <img src="<?php echo e(asset('frontend')); ?>/images/ALLIN-LOGO-NEW-WHITE.webp" style="width: 20%" alt="">
                </div>
                <div class="heading">
                    <h1 class="heading__text">Prestasi</h1>
                </div>
                <div class="stepper-wrapper">
                    <div class="stepper-item completed">
                        <div class="step-counter">1</div>
                        <div class="step-name">Akademis</div>
                    </div>
                    <div class="stepper-item completed">
                        <div class="step-counter">2</div>
                        <div class="step-name">Aktivitas</div>
                    </div>
                    <div class="stepper-item active">
                        <div class="step-counter">3</div>
                        <div class="step-name">Prestasi</div>
                    </div>
                    <div class="stepper-item">
                        <div class="step-counter">4</div>
                        <div class="step-name">Personal Branding</div>
                    </div>
                    <div class="stepper-item">
                        <div class="step-counter">5</div>
                        <div class="step-name">Komunikasi</div>
                    </div>
                </div>
                <!-- Quiz section -->
                <div class="quiz">
                    <form method="POST" action="/prestasi">
                        <?php echo csrf_field(); ?>
                        <div class="quiz-form__quiz">
                            
                            <input type="hidden" name="number" value="0" />
                            <input type="hidden" name="category[0]" value="prestasi" />
                            <input type="hidden" name="questions_number[0]" value="1" />
                            <p class="quiz-form__question">
                                1. Apakah kamu pernah memenangkan lomba/penghargaan tingkat sekolah?
                            </p>
                            <label class="quiz-form__ans" for="q11">
                                <input type="radio" name="answer[0]" id="q11" value="2"
                                    <?php echo e($retVal = !isset($prestasi[0]) ? '' : ($prestasi[0]['answer'] == '2' ? 'checked' : '')); ?>

                                    required />
                                <span class="design"></span>
                                <span class="text">Pernah</span>
                            </label>
                            <label class="quiz-form__ans" for="q12">
                                <input type="radio" name="answer[0]" id="q12" value="0"
                                    <?php echo e($retVal = !isset($prestasi[0]) ? '' : ($prestasi[0]['answer'] == '0' ? 'checked' : '')); ?>

                                    required />
                                <span class="design"></span>
                                <span class="text">Belum Pernah</span>
                            </label>
                        </div>

                        <div class="quiz-form__quiz">
                            <input type="hidden" name="number" value="1" />
                            <input type="hidden" name="category[1]" value="prestasi" />
                            <input type="hidden" name="questions_number[1]" value="2" />
                            <p class="quiz-form__question">
                                2. Apakah kamu pernah memenangkan lomba/penghargaan tingkat kota/kabupaten?
                            </p>
                            <label class="quiz-form__ans" for="q16">
                                <input type="radio" name="answer[1]" id="q16" value="3"
                                    <?php echo e($retVal = !isset($prestasi[1]) ? '' : ($prestasi[1]['answer'] == '3' ? 'checked' : '')); ?>

                                    required />
                                <span class="design"></span>
                                <span class="text">Pernah</span>
                            </label>
                            <label class="quiz-form__ans" for="q17">
                                <input type="radio" name="answer[1]" id="q17" value="0"
                                    <?php echo e($retVal = !isset($prestasi[1]) ? '' : ($prestasi[1]['answer'] == '0' ? 'checked' : '')); ?>

                                    required />
                                <span class="design"></span>
                                <span class="text">Belum Pernah</span>
                            </label>
                        </div>

                        <div class="quiz-form__quiz">
                            <input type="hidden" name="number" value="2" />
                            <input type="hidden" name="category[2]" value="prestasi" />
                            <input type="hidden" name="questions_number[2]" value="3" />
                            <p class="quiz-form__question">
                                3. Apakah kamu pernah memenangkan lomba/penghargaan tingkat provinsi?
                            </p>
                            <label class="quiz-form__ans" for="q21">
                                <input type="radio" name="answer[2]" id="q21" value="5"
                                    <?php echo e($retVal = !isset($prestasi[2]) ? '' : ($prestasi[2]['answer'] == '5' ? 'checked' : '')); ?>

                                    required />
                                <span class="design"></span>
                                <span class="text">Pernah</span>
                            </label>
                            <label class="quiz-form__ans" for="q22">
                                <input type="radio" name="answer[2]" id="q22" value="0"
                                    <?php echo e($retVal = !isset($prestasi[2]) ? '' : ($prestasi[2]['answer'] == '0' ? 'checked' : '')); ?>

                                    required />
                                <span class="design"></span>
                                <span class="text">Belum Pernah</span>
                            </label>
                        </div>

                        <div class="quiz-form__quiz">
                            <input type="hidden" name="number" value="3" />
                            <input type="hidden" name="category[3]" value="prestasi" />
                            <input type="hidden" name="questions_number[3]" value="4" />
                            <p class="quiz-form__question">
                                4. Apakah kamu pernah memenangkan lomba/penghargaan tingkat nasional?
                            </p>
                            <label class="quiz-form__ans" for="q26">
                                <input type="radio" name="answer[3]" id="q26" value="5"
                                    <?php echo e($retVal = !isset($prestasi[3]) ? '' : ($prestasi[3]['answer'] == '5' ? 'checked' : '')); ?>

                                    required />
                                <span class="design"></span>
                                <span class="text">Pernah</span>
                            </label>
                            <label class="quiz-form__ans" for="q27">
                                <input type="radio" name="answer[3]" id="q27" value="0"
                                    <?php echo e($retVal = !isset($prestasi[3]) ? '' : ($prestasi[3]['answer'] == '0' ? 'checked' : '')); ?>

                                    required />
                                <span class="design"></span>
                                <span class="text">Belum Pernah</span>
                            </label>
                        </div>

                        <div class="quiz-form__quiz">
                            <input type="hidden" name="number" value="4" />
                            <input type="hidden" name="category[4]" value="prestasi" />
                            <input type="hidden" name="questions_number[4]" value="5" />
                            <p class="quiz-form__question">
                                5. Apakah kamu pernah memenangkan lomba/penghargaan tingkat internasional?
                            </p>
                            <label class="quiz-form__ans" for="q29">
                                <input type="radio" name="answer[4]" id="q29" value="10"
                                    <?php echo e($retVal = !isset($prestasi[4]) ? '' : ($prestasi[4]['answer'] == '10' ? 'checked' : '')); ?>

                                    required />
                                <span class="design"></span>
                                <span class="text">Pernah</span>
                            </label>
                            <label class="quiz-form__ans" for="q30">
                                <input type="radio" name="answer[4]" id="q30" value="0"
                                    <?php echo e($retVal = !isset($prestasi[4]) ? '' : ($prestasi[4]['answer'] == '0' ? 'checked' : '')); ?>

                                    required />
                                <span class="design"></span>
                                <span class="text">Belum Pernah</span>
                            </label>
                        </div>

                        <div class="row tombol">
                            <div class="col-md-12">
                                <input class="submit back-button" type="button" value="Back"
                                    onclick="location.href='/soal_aktivitas'" />
                                <input class="submit" type="submit" value="Next" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $("input[type=radio]").each(function() {
            $(this).on('change', function() {
                var number = $(this).closest('.quiz-form__quiz').find(
                    'input[name="number"]').val();
                var questions_number = $(this).closest('.quiz-form__quiz').find(
                    'input[name="questions_number[' + number + ']"]').val();

                // alert(questions_number);
                $.ajax({
                    type: "post",
                    url: "<?php echo e(URL::to('/prestasi_session')); ?>",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        number: number,
                        answer: $(this).val(),
                        id_guest: $('input[name="id_guest"]').val(),

                        questions_number: $(this).closest('.quiz-form__quiz').find(
                            'input[name="questions_number[' + number + ']"]').val(),

                        category: $(this).closest('.quiz-form__quiz').find(
                            'input[name="category[' + number + ']"]').val(),
                    },
                    success: function(result) {
                        console.log(result);
                    },
                    error: function(data, textStatus, errorThrown) {
                        console.log(errorThrown);

                    },

                });
            })
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('utama.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quest\resources\views/questions/prestasi.blade.php ENDPATH**/ ?>