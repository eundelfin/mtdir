<?php

class insert_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('insert_model');
    }
   function index() {
        //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Mountain Name Field
        $this->form_validation->set_rules('dname', 'Name', 'required|min_length[3]|max_length[50]');

        //Validating Location Field
        $this->form_validation->set_rules('dlocation', 'Location', 'required|min_length[3]|max_length[50]');

        //Validating Coordinates Field
        $this->form_validation->set_rules('dcoordinates', 'Coordinates', 'required|min_length[3]|max_length[50]');

        //Validating Region Field
        $this->form_validation->set_rules('dregion', 'Region', 'required|min_length[1]|max_length[2]');
		
        //Validating Elevation Field
        $this->form_validation->set_rules('delevation', 'Elevation', 'required|min_length[1]|max_length[4]');		

        //Validating Difficulty Scale Field
        $this->form_validation->set_rules('ddificultyscale', 'Difficulty Scale', 'required|min_length[5]|max_length[5]');

        //Validating Difficutly Class Field
        $this->form_validation->set_rules('ddificultyclass', 'Difficulty Class', 'required|min_length[1]');

        //Validating Trail Class Field
        $this->form_validation->set_rules('dtrailclass', 'Trail Class', 'required|min_length[1]');

        //Validating Hours to Summit Field
        $this->form_validation->set_rules('dhourstosummit', 'Hours to Summit', 'required|min_length[1]|max_length[2]');

        //Validating Days Required Field
        $this->form_validation->set_rules('ddaysrequired', 'Days Required', 'required|min_length[1]|max_length[2]');
	

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('insert_view');
        } else {
            //Setting values for tabel columns
            $data = array(
                'name' => $this->input->post('dname'),
                'location' => $this->input->post('dlocation'),
                'coordinates' => $this->input->post('dcoordinates'),
                'region' => $this->input->post('dregion'),
				'masl' => $this->input->post('delevation'),
				'difficulty_scale' => $this->input->post('ddificultyscale'),
				'difficulty_class' => $this->input->post('ddificultyclass'),
				'trail_class' => $this->input->post('dtrailclass'),
				'hours_to_summit' => $this->input->post('dhourstosummit'),
				'days_required' => $this->input->post('ddaysrequired')
            );
            //Transfering data to Model
            $this->insert_model->form_insert($data);
            $data['message'] = 'Data Inserted Successfully';
            //Loading View
            $this->load->view('insert_view', $data);
        }
    }

}

?>