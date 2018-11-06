<?php /* /users/views/user_fields.php */

$currentMethod = $this->router->method;

$errorClass     = empty($errorClass) ? ' error' : $errorClass;
$controlClass   = empty($controlClass) ? 'span4' : $controlClass;
$registerClass  = $currentMethod == 'register' ? ' required' : '';
$editSettings   = $currentMethod == 'edit';

$defaultLanguage = isset($user->language) ? $user->language : strtolower(settings_item('language'));
$defaultTimezone = isset($user->timezone) ? $user->timezone : strtoupper(settings_item('site.default_user_timezone'));

?>
 
    <div class="form-group row<?php echo form_error('email') ? $errorClass : ''; ?>">
        <div class="col-md-12">
            <input class="form-control " type="text" id="email" name="email" value="<?php echo set_value('email', isset($user) ? $user->email : ''); ?>" placeholder="masukkan email"/>
            <span class="help-inline"><?php echo form_error('email'); ?></span>
        </div>
    </div>
    <div class="form-group row<?php echo form_error('display_name') ? $errorClass : ''; ?>">
        <div class="col-md-12">
            <input class="form-control <?php echo $controlClass; ?>" placeholder="masukkan Nama Lengkap" type="text" id="display_name" name="display_name" value="<?php echo set_value('display_name', isset($user) ? $user->display_name : ''); ?>" />
            <span class="help-inline"><?php echo form_error('display_name'); ?></span>
        </div>
    </div>

    <?php if (settings_item('auth.login_type') !== 'email' || settings_item('auth.use_usernames')) : ?>
        <div class="form-group row<?php echo form_error('username') ? $errorClass : ''; ?>">
            <div class="col-md-12">
                <input class="form-control <?php echo $controlClass; ?>" placeholder="masukkan username" type="text" id="username" name="username" value="<?php echo set_value('username', isset($user) ? $user->username : ''); ?>" />
                <span class="help-inline"><?php echo form_error('username'); ?></span>
            </div>
        </div>
    <?php endif; ?>
    <div class="form-group row<?php echo form_error('us_role') ? $errorClass : ''; ?>">
       <div class="col-md-12">
        <select name="role_id" id="role_id" class="chzn-select <?php echo $controlClass; ?> form-control"> 
            <option value="0"> -- Pilih Jenis USer --</option>    
            <option value="7">Admin Pesantren</option>
            <option value="8">Calon Wali Santri</option>
            <option value="9">Donatur / OTA</option>
        </select>
        <span class="help-inline"><?php echo form_error('display_name'); ?></span>
    </div>
</div>
<div class="form-group row<?php echo form_error('password') ? $errorClass : ''; ?>">
    <div class="col-md-12">
        <input class="form-control <?php echo $controlClass; ?>" type="password" id="password" placeholder="masukkan password" name="password" value="" />
        <span class="help-inline"><?php echo form_error('password'); ?></span>
        <p class="help-block"><?php echo isset($password_hints) ? $password_hints : ''; ?></p>
    </div>
</div>
<div class="form-group row<?php echo form_error('pass_confirm') ? $errorClass : ''; ?>">
    <div class="col-md-12">
        <input class="form-control <?php echo $controlClass; ?>" type="password" id="pass_confirm" placeholder="Ulangi Password" name="pass_confirm" value="" />
        <span class="help-inline"><?php echo form_error('pass_confirm'); ?></span>
    </div>
</div>
<?php if ($editSettings) : ?>
    <div class="form-group row<?php echo form_error('force_password_reset') ? $errorClass : ''; ?>">
        <div class="col-md-12">
            <label class="checkbox" for="force_password_reset">
                <input type="checkbox" id="force_password_reset" name="force_password_reset" value="1" <?php echo set_checkbox('force_password_reset', empty($user->force_password_reset)); ?> />
                <?php echo lang('us_force_password_reset'); ?>
            </label>
        </div>
    </div>
    <?php
    endif; ?>
<div hidden>
<?php if (! empty($languages) && is_array($languages)) :
    if (count($languages) == 1) :
?>
<input type="hidden" id="language" name="language" value="<?php echo $languages[0]; ?>" />
<?php
    else :
?>
<div class="form-group row<?php echo form_error('language') ? $errorClass : ''; ?>">
    <label class="col-md-2 " for="language"><?php echo lang('bf_language'); ?></label>
    <div class="col-md-4">
        <select name="language" id="language" class="chzn-select form-control <?php echo $controlClass; ?>">
            <?php foreach ($languages as $language) : ?>
            <option value="<?php e($language); ?>" <?php echo set_select('language', $language, $defaultLanguage == $language); ?>>
                <?php e(ucfirst($language)); ?>
            </option>
            <?php endforeach; ?>
        </select>
        <span class="help-inline"><?php echo form_error('language'); ?></span>
    </div>
</div>
<?php
    endif;
endif;
?>

<div class="form-group row<?php echo form_error('timezones') ? $errorClass : ''; ?>">
    <label class="col-md-2 " for="timezones"><?php echo lang('bf_timezone'); ?></label>
    <div class="col-md-4">
        <?php
        echo timezone_menu(
            set_value('timezones', isset($user) ? $user->timezone : $defaultTimezone),
            $controlClass,
            'timezones',
            array('id' => 'timezones')
        );
        ?>
        <span class="help-inline"><?php echo form_error('timezones'); ?></span>
    </div>
</div>
</div>