namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $user = auth()->user();

        return view('profile.show', compact('user'));
    }
    public function update(Request $request)
{
    $user = auth()->user();

    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = $request->input('password');
    $user->city = $request->input('city');
    $user->blood_type = $request->input('blood_type');

    $user->save();

    return redirect()->route('profile')->with('success', 'تم تحديث معلومات التسجيل بنجاح');
}
}
