<?php
    include '../component/navbar.php'
?>    
    <!-- Content -->
    <div class="content">
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

    <!-- Footer -->
    <div class="footer bg-dark text-light">
        <div class="container">
        <div class="row align-items-start">
          <div class="col text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book">
                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg
            >
            <br>
            <label for="logo">NovelReader</label>
          </div>
          <div class="col">
            <ul>
                <li>About</li>
                <li>Home</li>
                <li>Agreement</li>
                <li>zzzzzzzzz</li>
            </ul>
          </div>
          <div class="col text-center">
            <p>©2021 NovelReader</p>
          </div>
        </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    include '../component/footer.php'
    ?>