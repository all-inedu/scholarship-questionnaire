
<?php $__env->startSection('content'); ?>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet" />
    <div class="container body-color">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="row" style="justify-content: center;margin-bottom:1rem">
                    <img src="<?php echo e(asset('frontend')); ?>/images/ALLIN-LOGO-NEW-WHITE.webp" style="width: 20%" alt="">
                </div>
                <div class="heading">
                    <h1 class="heading__text">Akademis</h1>
                </div>

                <!-- Quiz section -->
                <div class="quiz">
                    <form method="POST" action="/akademik_no">
                        <?php echo csrf_field(); ?>
                        <div class="quiz-form__quiz">
                            
                            <input type="hidden" name="number" value="0" />
                            <input type="hidden" name="category[0]" value="academic" />
                            <input type="hidden" name="questions_number[0]" value="2" />
                            <p class="quiz-form__question">
                                2. Berapakah nilai rata-ratamu dari tahun pertama hingga sekarang?
                                
                            </p>
                            
                            <label class="quiz-form__ans" for="q11">
                                <input type="radio" name="answer[0]" id="q11" value="0"
                                    <?php echo e($retVal = !isset($no_decision[0]) ? '' : ($no_decision[0]['answer'] == '0' ? 'checked' : '')); ?> />
                                <span class="design"></span>
                                <span class="text">&lt; 70</span>
                            </label>
                            <label class="quiz-form__ans" for="q12">
                                <input type="radio" name="answer[0]" id="q12" value="4"
                                    <?php echo e($retVal = !isset($no_decision[0]) ? '' : ($no_decision[0]['answer'] == '4' ? 'checked' : '')); ?> />
                                <span class="design"></span>
                                <span class="text">&gt; 70</span>
                            </label>
                            <label class="quiz-form__ans" for="q13">
                                <input type="radio" name="answer[0]" id="q13" value="5"
                                    <?php echo e($retVal = !isset($no_decision[0]) ? '' : ($no_decision[0]['answer'] == '5' ? 'checked' : '')); ?> />
                                <span class="design"></span>
                                <span class="text">&gt; 80</span>
                            </label>
                            <label class="quiz-form__ans" for="q14">
                                <input type="radio" name="answer[0]" id="q14" value="7.5"
                                    <?php echo e($retVal = !isset($no_decision[0]) ? '' : ($no_decision[0]['answer'] == '7.5' ? 'checked' : '')); ?> />
                                <span class="design"></span>
                                <span class="text">&gt; 90</span>
                            </label>
                        </div>

                        <div class="quiz-form__quiz">
                            <input type="hidden" name="number" value="1" />
                            <input type="hidden" name="category[1]" value="academic" />
                            <input type="hidden" name="questions_number[1]" value="3" />
                            <p class="quiz-form__question">
                                3. Apakah nilaimu selalu konsisten (dengan angka yang baik) atau selalu meningkat setiap
                                tahunnya?
                            </p>
                            <label class="quiz-form__ans" for="q15">
                                <input type="radio" name="answer[1]" id="q15" value="7.5"
                                    <?php echo e($retVal = !isset($no_decision[1]) ? '' : ($no_decision[1]['answer'] == '7.5' ? 'checked' : '')); ?> />
                                <span class="design"></span>
                                <span class="text">Dari tahun pertama hingga tahun terakhir </span>
                            </label>
                            <label class="quiz-form__ans" for="q16">
                                <input type="radio" name="answer[1]" id="q16" value="0"
                                    <?php echo e($retVal = !isset($no_decision[1]) ? '' : ($no_decision[1]['answer'] == '0' ? 'checked' : '')); ?> />
                                <span class="design"></span>
                                <span class="text">Ada nilai yang turun dari semester/tahun sebelumnya</span>
                            </label>
                        </div>

                        <div class="quiz-form__quiz">
                            <input type="hidden" name="number" value="2" />
                            <input type="hidden" name="category[2]" value="academic" />
                            <input type="hidden" name="questions_number[2]" value="4" />
                            <p class="quiz-form__question">
                                4. Apakah kamu telah mengikuti tes standarisasi seperti SAT/ACT dengan nilai >1300 (untuk
                                SAT) dan
                                >30 (untuk ACT)?
                            </p>
                            <label class="quiz-form__ans" for="q17">
                                <input type="radio" name="answer[2]" id="q17" value="5"
                                    <?php echo e($retVal = !isset($no_decision[2]) ? '' : ($no_decision[2]['answer'] == '5' ? 'checked' : '')); ?> />
                                <span class="design"></span>
                                <span class="text">Sudah</span>
                            </label>
                            <label class="quiz-form__ans" for="q18">
                                <input type="radio" name="answer[2]" id="q18" value="0"
                                    <?php echo e($retVal = !isset($no_decision[2]) ? '' : ($no_decision[2]['answer'] == '0' ? 'checked' : '')); ?> />
                                <span class="design"></span>
                                <span class="text">Belum</span>
                            </label>
                        </div>

                        <div class="row tombol">
                            <div class="col-md-12">
                                <input class="submit back-button" type="button" value="Back"
                                    onclick="location.href='/akademik_decision'" />
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
                    url: "<?php echo e(URL::to('/akademik_no_session')); ?>",
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

<?php echo $__env->make('utama.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quest\resources\views/questions/akademik_no.blade.php ENDPATH**/ ?>