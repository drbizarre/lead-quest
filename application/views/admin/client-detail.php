<?php $this->load->view("commons/header"); ?>
  
<!-- page title -->
    <div class="page-main-title">

        <div class="leaft-title"><h1>Administración - <span>Clientes</span></h1></div>
        <span class="reght-pagenation"><a href="<?php echo site_url(); ?>">Administración</a> <i>/ </i> clientes</span>

    </div><!-- end copyright info -->

<!-- Content
======================================= -->  
<div id="content">
    <div class="container">
    
        <!-- content left area -->
        <div class="content-left">
            
            <div class="table-style">
                <h3>Información del cliente</h3>
                <table class="table-list">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td><?php echo $user->id; ?></td>
                        </tr>
                        <tr>
                            <th>Usuario</th>
                            <td><?php echo $user->username; ?></td>
                        </tr>                        
                        <tr>
                            <th>Correo Electrónico</th>
                            <td><?php echo $user->email; ?></td>
                        </tr>
                        <tr>
                            <th>Fecha de Registro</th>
                            <td><?php echo $user->server_created; ?></td>
                        </tr>
                    </tbody>
                </table>
                <h3>Detalles de usuario</h3>
                <table class="table-list">
                    <tbody>
                        <tr>
                            <th>Status</th>
                            <td><?php echo $user->status; ?></td>
                        </tr>
                        <tr>
                            <th>Account Expiration</th>
                            <td><?php echo $profile->account_expiration_date; ?></td>
                        </tr>
                        <tr>
                            <th>Membership Plan</th>
                            <td><?php echo $profile->membership_plan; ?></td>
                        </tr>                        
                        <tr>
                            <th>Teléfono</th>
                            <td>
                                <?php echo $profile->phone; ?>                           
                            </td>
                        </tr>
                        <tr>
                            <th>Correo Electrónico</th>
                            <td>
                                <?php echo $profile->emailcontact; ?>                           
                            </td>
                        </tr>     
                        <tr>
                            <th>Facebook</th>
                            <td>
                                <?php echo $profile->facebook; ?>                           
                            </td>
                        </tr>  
                        <tr>
                            <th>Youtube</th>
                            <td>
                                <?php echo $profile->youtube; ?>                           
                            </td>
                        </tr>    
                        <tr>
                            <th>Skype</th>
                            <td>
                                <?php echo $profile->skype; ?>                           
                            </td>
                        </tr>                                                                                                             
                    </tbody>
                </table>
            </div>
            
            
        </div><!-- end content left area -->

        <?php $this->load->view("commons/dashboard-admin"); ?>

    </div>
</div>

<?php $this->load->view("commons/footer"); ?>
</body>
</html>