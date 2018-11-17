<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Connexion &agrave; GROSIKO</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                  <?= $form->field($model, 'username')->textInput(['autofocus' => true,'class'=>'form-control','placeholder'=>'Nom utilisateur'])->label(false) ?>  
                                   <!-- <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus> -->
                                </div>
                                <div class="form-group">
                                    <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Mot de passe'])->label(false) ?>
                                    <!--
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    -->
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <?= $form->field($model, 'rememberMe')->checkbox([
                                            'template' => "<div class=\"col-lg-offset-1 col-lg-12\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                                        ])->label("Restez connecter"); ?>
                                        <!--
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        -->
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <?= Html::submitButton('Connecter', ['class' => 'btn btn-lg btn-success btn-block', 'name' => 'login-button']) ?>
                               <!-- <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
    

    <?php ActiveForm::end(); ?>
    



