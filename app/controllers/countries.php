<?php
class countries extends Controller {
    public function __construct() {
        $this->countryModel = $this->model('country');

    }

    public function index() {
        $country = $this->countryModel->getCountries();
        $data = [
            'country' => $country
        ];

        $this->view('countries/index', $data);
    }
}
