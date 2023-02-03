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
  width: 275px;
  padding: 40px 15px 12px 40px;
  max-width:100%;
  height:auto;
}

/* Style the images inside the grid */
.column img {
  opacity: 0.8; 
  cursor: pointer; 
  align: center;
  max-width:100%;
  height:auto;
}

/* Shadow untuk image categories */
.column img:hover {
  opacity: 10;
}
</style>