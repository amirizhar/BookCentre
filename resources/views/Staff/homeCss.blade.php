<style>
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
      max-width:100%;
      height:auto;
    }
    
    /* The grid: Four equal columns that floats next to each other */
    .column {
      float: left;
      width: 16%;
      padding: 10px 10px 10px 40px;
      max-width:80%;
      height:auto;
      align-content: center;
    }
    
    /* Style the images inside the grid */
    .column img {
      opacity: 0.8; 
      cursor: pointer; 
      align: center;
      padding: 10px 10px 10px 40px;
      max-width:80%;
      height:auto;
      align-content: center;
    }
    
    /* Shadow untuk image categories */
    .column img:hover {
      opacity: 10;
    }
</style>