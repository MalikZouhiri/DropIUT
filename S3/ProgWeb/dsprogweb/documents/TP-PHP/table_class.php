<?
class Table {

   var $border = "1";
   var $width = "500";
   var $class = "tabledefault";
   var $tabledata = Array();
   var $rows = 0;
   var $firstrowstyle = "tablehead";
   var $cellpadding = "2";
   var $cellspacing = "0";
   var $bordercolor = "#666666";

   // $this->

   function set_value($key, $val) {
       $this->$key = $val;
   }

   function output_table () {
       //echo $this->rows;
       $buffer = "\n<TABLE BORDER=\"$this->border\" WIDTH=\"$this->width\" BORDERCOLOR=\"$this->bordercolor\"";
       $buffer .= " CLASS=\"$this->class\" CELLPADDING=\"$this->cellpadding\" CELLSPACING=\"$this->cellspacing\">\n";

       for ($i = 1; $i <= $this->rows; $i++) {
          $rowdata = $this->tabledata[$i];

          IF (is_array($rowdata)) {
            IF ($i == 1 && $this->firstrowstyle) {
                $buffer .= "  <TR class=\"$this->firstrowstyle\"> \n";
            } ELSE {
                $buffer .= "  <TR>\n";
            }

            while (list($key, $val) = each($rowdata)) {
               $buffer .= "    <TD";
               $buffer .= ($val[colspan]) ? " COLSPAN=\"$val[colspan]\"" : "";
               $buffer .= ($val[width]) ? " WIDTH=\"$val[width]\">" : ">";
               $buffer .= ($val['val']) ? $val['val'] : "&nbsp;";
               $buffer .= "</TD>\n";
            }

            $buffer .= "  </TR>\n";
          }
       }

       $buffer .= "</TABLE>\n";
       return $buffer;
   }


   function add_row($style = false) {
       // style isn't used for now
       $this->rows++;
       //echo $this->rows;
   }

   function add_cell($val = false, $colspan = false, $width = false) {
//1st value is the content of the cell
//2nd value is the colspan, if empty then there's no colspan
//3rd value is the width of the cell
       $this->tabledata[$this->rows][] = Array (
           "val" => $val,
           "colspan" => $colspan,
           "width" => $width);
   }
}


?>