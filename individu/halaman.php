<?php
include 'koneksi.php';

function getProductsWithPagination($page, $results_per_page)
{
    global $conn;

    // Calculate the starting result
    $this_page_first_result = ($page - 1) * $results_per_page;

    $query = "SELECT varian_kue_id, nama_varian, gambar_kue, harga FROM varian_kue LIMIT $this_page_first_result, $results_per_page";
    $result = mysqli_query($conn, $query);

    // Display products
    if ($result) {
        while ($query = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-md-4">
                <div class="col-md-12">
                    <div class="card" style="">
                        <center>
                            <img src="<?php echo $query['gambar_kue']; ?>" class="card-img-top"
                                alt="<?php echo $query['nama_varian']; ?>">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $query['nama_varian']; ?>
                                </h5>
                                <p class="card-text">Harga: Rp.
                                    <?php echo $query['harga']; ?>
                                </p>
                                <a href="view.php?varian_kue_id=<?php echo $query['varian_kue_id']; ?>" class="btn btn-primary">View Details</a>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        echo "0 results";
    }
}
?>


<?php
function displayPagination($results_per_page)
{
    global $conn;

    // Pagination links using Bootstrap classes
    $sql = "SELECT COUNT(nama_varian) AS total FROM varian_kue";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $total_pages = ceil($row["total"] / $results_per_page);
    echo '<br>';
    echo '<nav aria-label="Page navigation">';
    echo '<ul class="pagination">';

    for ($i = 1; $i <= $total_pages; $i++) {
        echo "<li class='page-item'><a class='page-link' href='?page=" . $i . "'>" . $i . "</a></li>";
    }

    echo '</ul>';
    echo '</nav>';
}
?>