<section id="container">
    <!--header start-->
    <?php echo $this->element('header'); ?>
    <!--header end-->

    <!--sidebar start-->
    <?php echo $this->element('sidebar'); ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
            <section class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        //print_r($_SESSION);
                        if(!empty($_SESSION['error_msg'])){
                            ?>
                            <div class="alert alert-danger">
                                <?php echo $_SESSION['error_msg'];unset($_SESSION['error_msg']); ?>
                            </div>
                            <?php
                        }

                        if(!empty($_SESSION['warning_msg'])){
                            ?>
                            <div class="alert alert-warning" style="display: none;">
                                <?php
                                echo $_SESSION['warning_msg'];
                                unset($_SESSION['warning_msg']);
                                ?>
                            </div>
                            <?php
                        }

                        if(!empty($_SESSION['success_msg'])){
                            ?>
                            <div class="alert alert-success">
                                <?php echo $_SESSION['success_msg'];unset($_SESSION['success_msg']); ?>
                            </div>
                            <?php
                        }
                        ?>
                        <section class="panel  border-o">
                            <header class="panel-heading btn-primary">Edit E-Paper</header>
                            <div class="panel-body">
                                <div class="position-center">
                                    <?php
                                    echo $this->Form->create('Epaper', array('novalidate', 'type'=>'file'));
                                    
                                    echo $this->Form->input('title', array('class' => 'form-control input-lg', 'value' => $epapers_data['Epaper']['title']));

                                    $options = array(0=>'New Zealand',1=>'Australia');
                                    $selected = $epapers_data['Epaper']['category'];

                                    echo $this->Form->input('category', array('label'=>'Category','class' => 'form-control', 'options' => $options, 'selected' => $selected));

                                    echo $this->Form->input('epaper', array('type' => 'file', 'label'=>'E-Paper File (.pdf)'));

                                    $selected_file = $epapers_data['Epaper']['epaper'];

                                    if(!empty($selected_file))
                                    {   
                                        echo '<div class="current-file">';
                                        echo '<p>&nbsp;</p>';
                                        echo '<p>Current File : ';
                                        echo '<a target="_blank" href="'.$selected_file.'" title="'.$epapers_data['Epaper']['title'].'">'.$epapers_data['Epaper']['title'].'</a></p>';
                                        echo '</div>';                                        
                                    }

                                    

                                    ?>
                                    <div class="form-group col-md-12 padding-left-o">
                                        <label>Status</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="data[Epaper][status]" class="form-control-radio" value="1" <?php if($epapers_data['Epaper']['status'] == "1"){ echo 'checked="checked"'; } ?> />Published
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="data[Epaper][status]" class="form-control-radio" value="0" <?php if($epapers_data['Epaper']['status'] == "0"){ echo 'checked="checked"'; } ?> />Draft
                                            </label>
                                        </div>
                                    </div>
                                    <div class="submit-area">
                                    <?php
                                    echo $this->Form->submit('Submit', array('class' => 'btn btn-info'));
                                    
                                    echo $this->Html->link('Cancel', DEFAULT_ADMINURL.'epapers/lists', array('class' => 'btn btn-info'));
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </section>
    <!--main content end-->
    <?php echo $this->element('footer'); ?>
</section>