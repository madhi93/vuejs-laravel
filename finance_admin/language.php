<?php include 'header.php';
include 'include/db.php';


?>


<div class="col-lg-8">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">
                <h2>Currently Used Language </h2>
            </strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">S No.</th>
                        <th scope="col">Language</th>

                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $lang_data = $database->collection("language")->document("language1")->collection("language3")->document("c_language")->snapshot()->data();
                    $i = 0;
                    ksort($lang_data);

                    foreach ($lang_data as $index => $value) {
                        $i++;

                    ?>




                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $value; ?></td>

                            <td>
                                <form action="lang_delete.php" method="POST">
                                    <input type="hidden" name="ref_lang_delete" value="<?php echo $index ?>">
                                    <button type="submit" name="lang_delete" class="btn text-danger"><i class="fa fa-trash"></i></button>
                                </form>

                            </td>

                        </tr>

                    <?php


                    }
                    ?>

                </tbody>

            </table>

        </div>
    </div>

</div>
<div class="col-lg-8 " align="center" style="margin-bottom:50px;">
    <form action="lang_insert.php" method="POST">
        <button type="submit" class="btn btn-info btn-lg rounded ">Add Language</button>
    </form>
</div>






<!--  Manage Constant Section      -->





<div class="col-lg-12 " align="center">
    <form>
        <button type="button" class="btn btn-info btn-lg rounded bg-dark text-info" style="margin-bottom: 10px;margin-top: 10px;">
            <h1>Manage Constants</h1>
        </button>
    </form>


</div>


<?php
$city = $database->collection("language")->document("constant")->collection("language2");
$documents = $city->documents();

foreach ($documents as $document) {

    $doc = $document->id();
?>


    <div class="col-lg-4 col-md-6">
        <aside class="profile-nav alt">
            <section class="card">
                <div class="card-header user-header alt bg-dark">
                    <div class="card-header">
                        <?php
                        $city = $database->collection("language")->document("constant")->collection("language2")->document("$doc")->collection("0");
                        $documents = $city->documents();
                        foreach ($documents as $document) {
                            $doc1 = $document->id();

                            $data_title = $database->collection("language")->document("constant")->collection("language2")->document($doc)->collection("0")->document("$doc1")->snapshot()->data();


                            foreach ($data_title as $index => $value) {

                                if ($index == 0) {


                        ?>

                                    <h3 class="text-light" align="center"><?php echo $value; ?></h3>

                        <?php
                                }
                            }
                        }
                        ?>
                    </div>

                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-light text-dark">
                            <tr>
                                <th scope="col">S No.</th>
                                <th scope="col">Constant</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            $datas = $database->collection("language")->document("constant")->collection("language2")->document($doc)->snapshot()->data();
                            foreach ($datas as $index => $value) {



                                $i++;


                            ?>

                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><?php echo $value; ?></td>


                                    <td>
                                        <form action="const_delete.php" method="POST">
                                            <input type="hidden" name="ref_d_delete" value="<?php echo $doc; ?>">
                                            <input type="hidden" name="ref_t_delete" value="<?php echo $index; ?>">
                                            <button type="submit" name="demo_delete" class="btn text-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    <?php


                                }
                                    ?>

                                    </td>
                                </tr>




                        </tbody>
                    </table>
                </div>
            </section>
        </aside>
        <div class="col-lg-8 " align="center">
            <div class="row content-align-center">
                <form action="dem_form_insert.php" method="POST">
                    <input type="hidden" name="ref_d_insert" value="<?php echo $doc; ?>">
                    <button type="submit" class="btn-lg btn btn-info  rounded" name="demo_insert">Add</button>
                </form>

                <form action="add_constant.php" method="POST">
                    <input type="hidden" name="ref_const_delete" value="<?php echo $doc; ?>">
                    <button type="submit" class="btn-lg btn btn-danger  rounded" align="center" style="margin-left:5px;" name="delete_constant">Delete</button>
                </form>
            </div>
        </div>


    </div>



<?php

}
?>

<div class="col-lg-12 " align="center">
    <form action="add_const_name.php" method="POST">

        <button type="submit" class="btn btn-info btn-sm rounded bg-dark text-info" style="margin-bottom: 10px;margin-top: 10px;">
            <h1>Add Constant</h1>
        </button>
    </form>

</div>

<?php include 'footer.php'; ?>