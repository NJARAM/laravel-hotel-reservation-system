<?php

use Illuminate\Database\Seeder;
Use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user=new User;
       $user->name='moses';
       $user->email='admin@gmail.com';
       $user->password='eyJpdiI6IjVuV1lWR3JXRlFmdGFHbXljN0Vodnc9PSIsInZhbHVlIjoibEpLQWJSdmgybDBXRHdjNDJadERwM0lZRWlLZnA5d2hcL1wvMHdCNEpCSklFPSIsIm1hYyI6ImE1NDQxZDhiMTAyNjQyNTZkOTZlY2NkZTdmNmIxYThhNjU1OTI2MGI2OTFmYWUxNmRlODk1ZDNiODgxMTY3YzAifQ==';
       $user->save();
    }
}
