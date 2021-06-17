?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Register extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }
 
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'User_Name'          => 'required|min_length[3]|max_length[20]',
            'USer_Email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'Pwd'      => 'required|min_length[6]|max_length[200]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'User_Name'     => $this->request->getVar('name'),
                'User_Email'    => $this->request->getVar('email'),
                'Pwd' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
         
    }
 
}