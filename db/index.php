<?php

class DB
{

  private db_host = 'localhost';
  private db_user = 'root';
  private db_pass = '';
  private db_name = 'iuni';
  private db_charset = 'utf8mb4';
  private options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
  private con = false;
  public last_error = null;

    public function connect()   {
      if(!$this->con)
        {
            $dsn = 'mysql:host='.$this->db_host.';dbname='.$this->db_name.';charset='.$this->db_charset;

            try {
                 $this->con = new PDO($dsn, $this->db_user, $this->db_pass, $this->options);
                 return true;
            } catch (\PDOException $e) {
                 $this->con = false;
                 $this->last_error = new \PDOException($e->getMessage(), (int)$e->getCode());
            }
            return false;
        } else
        {
            return true;
        }
    }
    public function disconnect()    {   }

    // Terminate Build
    public function query()        {   }
    public function reset_query()        {   }
    public function get()        {   }
    public function get_where()        {   }
    public function count_all_results()        {   }
    public function count_all($tbl)        {   }
    public function insert()        {   }
    public function insert_batch()        {   }
    public function update()        {   }
    public function update_batch()        {   }
    public function delete()        {   }
    public function empty_table()        {   }
    public function truncate()        {   }


    // construct sql
    public function from()        {   }
    public function select()        {   }
    public function distinct()        {   }
    public function select_sum()        {   }
    public function select_avg()        {   }
    public function select_max()        {   }
    public function select_min()        {   }
    public function select_count()        {   }
    public function like()        {   }
    public function set()        {   }
    public function where()        {   }
    public function or_where()        {   }
    public function where_in()        {   }
    public function or_where_in()        {   }
    public function where_not_in()        {   }
    public function or_where_not_in()        {   }
    public function or_group_start()        {   } // add or (
    public function group_end()        {   } // add )

    // limit result set
    public function join()        {   }
    public function limit()        {   }
    public function offset()        {   }
    public function group_by()        {   }
    public function order_by()        {   }


    public function trans_start()        {   }
    public function trans_complete()        {   }
    public function trans_status()        {   }

    public function count()        {   }
    public function num_rows()        {   }
    public function last_query()        {   }
    public function insert_id()        {   }

    public function first_row()        {   }
    public function results()        {   }
    public function results_array()        {   }




}