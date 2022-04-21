<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grocery_List;
use App\Models\Product;
use App\Models\Product_Category;
use App\Models\User;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class UserController extends Controller
{
    public function viewGroceryList()
    {
        $groceryLists = Grocery_List::all();
        return view('home', compact('groceryLists'));
    }

    public function runPython()
    {
        // $param = "hellofrompython";
        // $param2 = "param2";

        // $result = shell_exec("python C:\Users\yenya\OneDrive\Desktop\GroceryProductRecommenderSystem\public\pythonfile\\testRunPython.py $param $param2");
        // return $result;
        // $process = new Process(['python', 'C:\Users\yenya\OneDrive\Desktop\testRunPython.py']); 
        // //$output_data = system('/public/pythonfile/testRunPython.py');
        // //$process = new Process(['python', 'C:\Users\yenya\OneDrive\Desktop\GroceryProductRecommenderSystem\public\pythonfile\\testRunPython.py']);
        // $process->run();

        // // executes after the command finishes
        // if (!$process->isSuccessful()) {
        //     throw new ProcessFailedException($process);
        // }

        // $output_data = $process->getOutput();
        // return $output_data;

        // $output_data = system('python C:\Users\yenya\OneDrive\Desktop\GroceryProductRecommenderSystem\public\pythonfile\\testRunPython.py');
        // return $output_data;

        //$result = shell_exec("python C:\Users\yenya\OneDrive\Desktop\\recommendQuantity2.py ");
        $result = shell_exec("python C:\Users\yenya\OneDrive\Desktop\\testRunPython.py ");
        return $result;
    
    }
}
