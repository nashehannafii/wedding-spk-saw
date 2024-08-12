<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

// Start the page with Yii2 standard practices
$this->title = 'Login';
// $this->params['breadcrumbs'][] = $this->title;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= Html::encode($this->title) ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <style>
        .btn-facebook {
            background-color: #39579A;
            color: white;
            margin-bottom: 10px;
        }

        .btn-google {
            background-color: #DD4B39;
            color: white;
            margin-bottom: 20px;
        }
    /* .input-group-text {
            background: #007bff;
            color: white;
            border: 0;
        }

        .form-control,
        .btn-primary {
            border-radius: 20px;
        } */
    </style>
</head>

<body>  
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Sign In With</h3>
                    </div>
                    <div class="card-body">
                        <!-- <div class="form-group">
                            <button class="btn btn-facebook btn-block"><i class="fab fa-facebook-f"></i> Facebook</button>
                            <button class="btn btn-google btn-block"><i class="fab fa-google"></i> Google</button>
                        </div>

                        <p class="text-center">or</p> -->

                        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                        <div class="form-group">
                            <?= $form->field($model, 'username', [
                                'options' => ['class' => 'form-group has-feedback'],
                                'inputTemplate' => '{input}<span class="input-group-text"><i class="fas fa-user"></i></span>',
                                'template' => '<div class="input-group mb-3">{input}{error}</div>',
                            ])->textInput(['placeholder' => 'Username']) ?>
                        </div>

                        <div class="form-group">
                            <?= $form->field($model, 'password', [
                                'options' => ['class' => 'form-group has-feedback'],
                                'inputTemplate' => '{input}<span class="input-group-text"><i class="fas fa-lock"></i></span>',
                                'template' => '<div class="input-group mb-3">{input}{error}</div>',
                            ])->passwordInput(['placeholder' => 'Password']) ?>
                        </div>

                        <div class="form-group">
                            <?= Html::submitButton('Sign In', ['class' => 'btn btn-primary btn-block']) ?>
                        </div>
                        <?php ActiveForm::end(); ?>

                        <div class="text-center">
                            <a href="#">Forgot password?</a>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        Not a member? <a href="#">Sign up now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>