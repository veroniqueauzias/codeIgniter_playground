<?php
class News_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_news($slug = FALSE)
        {
        if ($slug === FALSE)
        {
                $query = $this->db->get('news');
                return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
        }

        public function set_news()
        {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);
      
        $data = array(
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'text' => $this->input->post('text')
        );

        return $this->db->insert('news', $data);
        }


        public function update_news($slug)
        {
                // get new data
                $this->load->helper('url');

                $newslug = url_title($this->input->post('title'), 'dash', TRUE);
              
                $data = array(
                        'title' => $this->input->post('title'),
                        'slug' => $newslug,
                        'text' => $this->input->post('text')
                );
        
                //update db
                $this->db->where('slug',$slug); // where slug is old slug given in parameter
                return $this->db->update('news', $data);

        }

        public function delete_news($slug) {
                $this->db->where('slug',$slug); 
                return $this->db->delete('news');
                }
        }

