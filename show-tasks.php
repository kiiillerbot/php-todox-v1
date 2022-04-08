<?php
  include 'config.php';

  $sql = "SELECT * FROM tasks";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>
  <div class="mt-2 flex justify-between items-center">
    <span class="text-gray-500 text-sm"><i class="fas fa-arrow-right mr-1"></i><?php echo $row['title']?></span>
    <span id="removeBtn" class="ml-2 inline-block px-6 py-1 bg-red-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-600 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-id="<?php echo $row['id']; ?>">
      <i class="fas fa-trash" ></i>
    </span>
  </div>
<?php
  }
  echo'
  <div class="mt-3 border-t border-1 border-gray-100 py-1">
    <p class="text-sm text-gray-500"> You have ' . mysqli_num_rows($result) . ' pending task</p>
  </div>
  ';
} else{
  echo "
  <div class='mt-3 border-t border-1 border-gray-100 py-1'>
    <p class='text-sm text-gray-500'>No record found.</p>
  </div>
  ";
}
?>