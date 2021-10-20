<?php
    include '../component/navbar.php'
?>    
    <!-- Content -->
    <div class="content mt-5" id="listPage" >
      <!-- Body -->
        <div class="container">
            <table class="table-bordered" width="100%" >
                <tr class="text-center" >
                    <th width="10px">No</th>
                    <th width="200px"></th>
                    <th>Nama Novel</th>
                </tr>
                <!-- List Book -->
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center"><img src="https://th.bing.com/th/id/OIP.PmbWzLbCZWDYD2fZDbUg1AHaLW?w=186&h=286&c=7&r=0&o=5&dpr=1.25&pid=1.7" width="100" alt="..."></td>
                    <td>Solo Leveling</td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td class="text-center"><img src="https://th.bing.com/th/id/OIP.PmbWzLbCZWDYD2fZDbUg1AHaLW?w=186&h=286&c=7&r=0&o=5&dpr=1.25&pid=1.7" width="100" alt="..."></td>
                    <td>Solo Leveling</td>
                </tr>
                <tr>
                    <td class="text-center">3</td>
                    <td class="text-center"><img src="https://th.bing.com/th/id/OIP.PmbWzLbCZWDYD2fZDbUg1AHaLW?w=186&h=286&c=7&r=0&o=5&dpr=1.25&pid=1.7" width="100" alt="..."></td>
                    <td>Solo Leveling</td>
                </tr>
            </table>
            <!-- Pagination -->
            <div class="m-5">
                <div class="row mx-auto " style="width: 200px;">
                  <div class="col">
                  </div>
                  <div class="col align-self-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                      </nav>
                  </div>
                  <div class="col">
                  </div>
                </div>
            </div>   
        </div>
    </div>
    <?php
    include '../component/footer.php'
    ?>