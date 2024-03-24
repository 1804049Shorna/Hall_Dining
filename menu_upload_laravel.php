<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image; // Assuming you have an Image model

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'idd' => 'required',
            'menu' => 'required',
        ]);

        $image = new Image;
        $image->studentId = $request->idd;
        $image->menu = $request->menu;
        $image->save();

        return redirect('menu_view');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images2';
    protected $fillable = ['studentId', 'menu'];
}