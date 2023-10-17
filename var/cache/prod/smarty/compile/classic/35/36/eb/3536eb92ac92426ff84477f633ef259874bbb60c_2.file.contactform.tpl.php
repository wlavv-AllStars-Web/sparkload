<?php
/* Smarty version 4.3.1, created on 2023-10-17 15:25:47
  from '/opt/lampp/htdocs/sparkload/themes/classic/modules/contactform/views/templates/widget/contactform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652e996bcfc361_12143011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3536eb92ac92426ff84477f633ef259874bbb60c' => 
    array (
      0 => '/opt/lampp/htdocs/sparkload/themes/classic/modules/contactform/views/templates/widget/contactform.tpl',
      1 => 1697552225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652e996bcfc361_12143011 (Smarty_Internal_Template $_smarty_tpl) {
?>
     <?php if ($_smarty_tpl->tpl_vars['notifications']->value) {?>
      <div class="col-xs-12 alert <?php if ($_smarty_tpl->tpl_vars['notifications']->value['nw_error']) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
        <ul>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['messages'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
            <li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </div>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['notifications']->value || $_smarty_tpl->tpl_vars['notifications']->value['nw_error']) {?>

<style>
.ssc:focus {
    outline: none !important;
    border-bottom:2px solid red !important;
}
.ssc:focus::placeholder {
  color: red;
}
.ss:focus {
    outline: none !important;
    border-bottom:2px solid red !important;
}
input:focus::placeholder {
  color: red;
}
</style>

<section class="contact-form">
  <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
" method="post" <?php if ($_smarty_tpl->tpl_vars['contact']->value['allow_file_upload']) {?>enctype="multipart/form-data"<?php }?>>

    <div class="col-md-4 col-xl-4">
    <h1 style="color:#000;">Contact Info</h1>
      <div style="display:flex;">
      <i aria-hidden="true" class="fas fa-envelope" style="padding-top:12px;padding-bottom:12px;"><span style="padding-left: 9px;font-family: 'Roboto', Sans-serif;font-weight: 300;">info@eculimit.com</span></i>
      </div>
    <h1 style="color:#000;padding-top:12px;">Opening Hours</h1>
      <div>
      <p style="font-family: 'Roboto', Sans-serif;font-weight: 300;padding-top:7px;">Monday – Friday: 09:00 – 19:00h</p>
      <p style="font-family: 'Roboto', Sans-serif;font-weight: 300;padding-top:7px;">Saturday: 09:00 – 14:00</p>
      <p style="font-family: 'Roboto', Sans-serif;font-weight: 300;padding-top:7px;">Sunday: <span style="color: #ed1921;">Closed!</span></p>
      </div>
      <div style="display:flex;padding: 6px;">
      <img decoding="async" src="img/cms/icos/clock-1-150x150.png" style="width: 40px;height:auto;">															
      <div style="margin-top: 11px;padding-left: 11px;font-weight: bold;color: #000;font-size: 17px;">Current time in Eculimit<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_time']->value, ENT_QUOTES, 'UTF-8');?>
</div>
     </div>
      <div style="padding-top: 12px;font-size: 33px;font-weight: bold;color: #ED1921;" align="center" id="relogio">10:49 am</div>
      <div align="center"> 
      <div class="" id="open">Currently Open</div>
      </div>
    </div> 
      <section class="form-fields">
        <div style="width: 100%;color: #000;">
          <div class="col-md-12 col-lg-12">
            <h1 style="width:100%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Any question?','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h1>
            <p style="font-size: 13px;margin-top: 26px;margin-bottom: 44px;">Do not hesitate to send us a message. We will reply as soon as possible.</p>
            <input size="40" class="ss" aria-required="true" aria-invalid="true" placeholder="Name:" value="" type="text" name="name">
            <input size="40" class="ss" aria-required="true" aria-invalid="true" placeholder="Company:" value="" type="text" name="company">
            <input size="40" class="ss" aria-required="true" aria-invalid="true" placeholder="Phone:" value="" type="text" name="phone">
            <input size="40" class="ss" aria-required="true" aria-invalid="true" placeholder="Email:" value="" type="text" name="from">
            <textarea cols="40" rows="10" class="ssc" aria-invalid="false" placeholder="Message:" name="message"></textarea>
          </div>
        </div>
        <div class="form-group row" style="display:none;">
          <label class="col-md-3 form-control-label" for="id_contact"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subject','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
          <div class="col-md-6">
            <select name="id_contact" id="id_contact" class="form-control form-control-select">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value['contacts'], 'contact_elt');
$_smarty_tpl->tpl_vars['contact_elt']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact_elt']->value) {
$_smarty_tpl->tpl_vars['contact_elt']->do_else = false;
?>
                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact_elt']->value['id_contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact_elt']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
          </div>
        </div>
        <div class="form-group row">   
          <div class="col-md-6">
            <input
              id="email"
              class="form-control"
              name="fbrom"
              type="hidden"
              value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact']->value['email'], ENT_QUOTES, 'UTF-8');?>
"
              placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'your@email.com','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
"
            >
          </div>
        </div>
      <footer class="form-footer text-sm-right">
        <style>
          input[name=url] {
            display: none !important;
          }
        </style>
          <?php echo '<script'; ?>
 type="text/javascript">
function updateClock() {
    const currentDate = new Date();
    const options = { timeZone: 'Europe/Madrid', hour12: true, hour: 'numeric', minute: '2-digit' };
    const formattedTime = currentDate.toLocaleString('es-ES', options).replace(/\./g, '').toLowerCase();
    document.getElementById('relogio').textContent = formattedTime;
}

// Update the clock every second
setInterval(updateClock, 1000);
// Initial update
updateClock();

  
    function checkStoreStatus() {
        const today = new Date().toLocaleString('en-US', { timeZone: 'Europe/Madrid', weekday: 'long' });
        const currentDate = new Date();
        const currentTime = `${currentDate.getHours()}:${currentDate.getMinutes()}`;
        const openElement = document.getElementById('open');
        if (today === 'Saturday') {
            if (compareTime(currentTime, '09:00', '14:00')) {
                openElement.classList.remove('btn-h-r');
                openElement.classList.add('btn-h-g');
            } else {
                openElement.classList.remove('btn-h-g');
                openElement.classList.add('btn-h-r');
            }
        } else if (today === 'Sunday') {
            openElement.classList.remove('btn-h-g');
            openElement.classList.add('btn-h-r');
        } else {
            if (compareTime(currentTime, '09:00', '19:00')) {
                openElement.classList.remove('btn-h-r');
                openElement.classList.add('btn-h-g');
            } else {
                openElement.classList.remove('btn-h-g');
                openElement.classList.add('btn-h-r');
            }
        }
    }

    function compareTime(current, start, end) {
        const currentTime = new Date('2000-01-01 ' + current);
        const startTime = new Date('2000-01-01 ' + start);
        const endTime = new Date('2000-01-01 ' + end);
        return currentTime >= startTime && currentTime <= endTime;
    }

    // Verificar o estado da loja a cada minuto
    setInterval(checkStoreStatus, 60000);
    // Verificação inicial
    checkStoreStatus();
  
<?php echo '</script'; ?>
>


        <input type="text" name="url" value=""/>
        <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input class="spaa-btn-red" style="float:left;border: 0px;margin-top: 22px; margin-left: 15px;text-transform:uppercase;" type="submit" name="submitMessage" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send Message','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
      </footer>
        <?php if (2 == 23) {?>
          <div class="form-group row">
            <label class="col-md-3 form-control-label" for="id-order"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order reference','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
            <div class="col-md-6">
              <select id="id-order" name="id_order" class="form-control form-control-select">
                <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select reference','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value['orders'], 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
                  <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['id_order'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            </div>
            <span class="col-md-3 form-control-comment">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'optional','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>

            </span>
          </div>
        <?php }?>

        <?php if (2 == 23) {?>
          <div class="form-group row">
            <label class="col-md-3 form-control-label" for="file-upload"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachment','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
            <div class="col-md-6">
              <input id="file-upload" type="hidden" name="fileUpload" class="filestyle" data-buttonText="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose file','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
            </div>
            <span class="col-md-3 form-control-comment">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'optional','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>

            </span>
          </div>


        <div class="form-group row" style="display:none;">
          <label class="col-md-3 form-control-label" for="contactform-message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
          <div class="col-md-9">
            <textarea
              id="contactform-message"
              class="form-control"
              name="messagebk"
              placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How can we help?','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
"
              rows="3"
            ><?php if ($_smarty_tpl->tpl_vars['contact']->value['message']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact']->value['message'], ENT_QUOTES, 'UTF-8');
}?></textarea>
          </div>
        </div>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value))) {?>
          <div class="form-group row">
            <div class="offset-md-3">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

            </div>
          </div>
        <?php }?>

      </section>


    <?php }?>

  </form>

</section>
<?php }
}
