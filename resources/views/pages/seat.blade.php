@extends('layouts.home')

@section('content')
<div class="container  mt-5 mb-3 ">
    <div class="row justify-content-center">
        <div class="col-5">
            <hr style="height:2px; border-width:0;color:#000; background-color:#000; ">
            <hr style="height:2px; border-width:0;color:#000; background-color:#000; ">
        </div>
        <div class="col-2 text-center movie-text pt-1">
            <h2>
                SEAT
            </h2>
        </div>
        <div class="col-5">
          <hr style="height:2px; border-width:0;color:#000; background-color:#000; ">
          <hr style="height:2px; border-width:0;color:#000; background-color:#000; ">
      </div>
    </div>
    <form action="{{ route('pesan-tiket', $item->id_jadwal) }}" onsubmit="return validate(this);">       
        <div class="row justify-content-center">
            <div class="col-md-7">
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="H1" @foreach ($check as $a)
                    @if ($a == "H1")
                        disabled
                    @endif
                @endforeach>H1</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="H2" @foreach ($check as $a)
                    @if ($a == "H2")
                        disabled
                    @endif
                @endforeach>H2</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="H3" @foreach ($check as $a)
                    @if ($a == "H3")
                        disabled
                    @endif
                @endforeach>H3</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="H4" @foreach ($check as $a)
                    @if ($a == "H4")
                        disabled
                    @endif
                @endforeach>H4</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="H5" @foreach ($check as $a)
                    @if ($a == "H5")
                        disabled
                    @endif
                @endforeach>H5</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="H6" @foreach ($check as $a)
                    @if ($a == "H6")
                        disabled
                    @endif
                @endforeach>H6</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="H7" @foreach ($check as $a)
                    @if ($a == "H7")
                        disabled
                    @endif
                @endforeach>H7</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="H8" @foreach ($check as $a)
                    @if ($a == "H8")
                        disabled
                    @endif
                @endforeach>H8</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="H9" @foreach ($check as $a)
                    @if ($a == "H9")
                        disabled
                    @endif
                @endforeach>H9</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="H10" @foreach ($check as $a)
                    @if ($a == "H10")
                        disabled
                    @endif
                @endforeach>H10</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="G1" @foreach ($check as $a)
                    @if ($a == "G1")
                        disabled
                    @endif
                @endforeach>G1</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="G2" @foreach ($check as $a)
                    @if ($a == "G2")
                        disabled
                    @endif
                @endforeach>G2</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="G3" @foreach ($check as $a)
                    @if ($a == "G3")
                        disabled
                    @endif
                @endforeach>G3</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="G4" @foreach ($check as $a)
                    @if ($a == "G4")
                        disabled
                    @endif
                @endforeach>G4</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="G5" @foreach ($check as $a)
                    @if ($a == "G5")
                        disabled
                    @endif
                @endforeach>G5</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="G6" @foreach ($check as $a)
                    @if ($a == "G6")
                        disabled
                    @endif
                @endforeach>G6</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="G7" @foreach ($check as $a)
                    @if ($a == "G7")
                        disabled
                    @endif
                @endforeach>G7</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="G8" @foreach ($check as $a)
                    @if ($a == "G8")
                        disabled
                    @endif
                @endforeach>G8</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="G9" @foreach ($check as $a)
                    @if ($a == "G9")
                        disabled
                    @endif
                @endforeach>G9</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="G10" @foreach ($check as $a)
                    @if ($a == "G10")
                        disabled
                    @endif
                @endforeach>G10</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="F1" @foreach ($check as $a)
                    @if ($a == "F1")
                        disabled
                    @endif
                @endforeach>F1</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="F2" @foreach ($check as $a)
                    @if ($a == "F2")
                        disabled
                    @endif
                @endforeach>F2</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="F3" @foreach ($check as $a)
                    @if ($a == "F3")
                        disabled
                    @endif
                @endforeach>F3</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="F4" @foreach ($check as $a)
                    @if ($a == "F4")
                        disabled
                    @endif
                @endforeach>F4</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="F5" @foreach ($check as $a)
                    @if ($a == "F5")
                        disabled
                    @endif
                @endforeach>F5</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="F6" @foreach ($check as $a)
                    @if ($a == "F6")
                        disabled
                    @endif
                @endforeach>F6</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="F7" @foreach ($check as $a)
                    @if ($a == "F7")
                        disabled
                    @endif
                @endforeach>F7</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="F8" @foreach ($check as $a)
                    @if ($a == "F8")
                        disabled
                    @endif
                @endforeach>F8</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="F9" @foreach ($check as $a)
                    @if ($a == "F9")
                        disabled
                    @endif
                @endforeach>F9</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="F10" @foreach ($check as $a)
                    @if ($a == "F10")
                        disabled
                    @endif
                @endforeach>F10</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="E1" @foreach ($check as $a)
                    @if ($a == "E1")
                        disabled
                    @endif
                @endforeach>E1</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="E2" @foreach ($check as $a)
                    @if ($a == "E2")
                        disabled
                    @endif
                @endforeach>E2</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="E3" @foreach ($check as $a)
                    @if ($a == "E3")
                        disabled
                    @endif
                @endforeach>E3</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="E4" @foreach ($check as $a)
                    @if ($a == "E4")
                        disabled
                    @endif
                @endforeach>E4</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="E5" @foreach ($check as $a)
                    @if ($a == "E5")
                        disabled
                    @endif
                @endforeach>E5</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="E6" @foreach ($check as $a)
                    @if ($a == "E6")
                        disabled
                    @endif
                @endforeach>E6</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="E7" @foreach ($check as $a)
                    @if ($a == "E7")
                        disabled
                    @endif
                @endforeach>E7</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="E8" @foreach ($check as $a)
                    @if ($a == "E8")
                        disabled
                    @endif
                @endforeach>E8</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="E9" @foreach ($check as $a)
                    @if ($a == "E9")
                        disabled
                    @endif
                @endforeach>E9</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="E10" @foreach ($check as $a)
                    @if ($a == "E10")
                        disabled
                    @endif
                @endforeach>E10</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="D1" @foreach ($check as $a)
                    @if ($a == "D1")
                        disabled
                    @endif
                @endforeach>D1</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="D2" @foreach ($check as $a)
                    @if ($a == "D2")
                        disabled
                    @endif
                @endforeach>D2</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="D3" @foreach ($check as $a)
                    @if ($a == "D3")
                        disabled
                    @endif
                @endforeach>D3</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="D4" @foreach ($check as $a)
                    @if ($a == "D4")
                        disabled
                    @endif
                @endforeach>D4</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="D5" @foreach ($check as $a)
                    @if ($a == "D5")
                        disabled
                    @endif
                @endforeach>D5</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="D6" @foreach ($check as $a)
                    @if ($a == "D6")
                        disabled
                    @endif
                @endforeach>D6</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="D7" @foreach ($check as $a)
                    @if ($a == "D7")
                        disabled
                    @endif
                @endforeach>D7</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="D8" @foreach ($check as $a)
                    @if ($a == "D8")
                        disabled
                    @endif
                @endforeach>D8</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="D9" @foreach ($check as $a)
                    @if ($a == "D9")
                        disabled
                    @endif
                @endforeach>D9</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="D10" @foreach ($check as $a)
                    @if ($a == "D10")
                        disabled
                    @endif
                @endforeach>D10</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="C1" @foreach ($check as $a)
                    @if ($a == "C1")
                        disabled
                    @endif
                @endforeach>C1</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="C2" @foreach ($check as $a)
                    @if ($a == "C2")
                        disabled
                    @endif
                @endforeach>C2</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="C3" @foreach ($check as $a)
                    @if ($a == "C3")
                        disabled
                    @endif
                @endforeach>C3</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="C4" @foreach ($check as $a)
                    @if ($a == "C4")
                        disabled
                    @endif
                @endforeach>C4</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="C5" @foreach ($check as $a)
                    @if ($a == "C5")
                        disabled
                    @endif
                @endforeach>C5</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="C6" @foreach ($check as $a)
                    @if ($a == "C6")
                        disabled
                    @endif
                @endforeach>C6</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="C7" @foreach ($check as $a)
                    @if ($a == "C7")
                        disabled
                    @endif
                @endforeach>C7</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="C8" @foreach ($check as $a)
                    @if ($a == "C8")
                        disabled
                    @endif
                @endforeach>C8</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="C9" @foreach ($check as $a)
                    @if ($a == "C9")
                        disabled
                    @endif
                @endforeach>C9</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="C10" @foreach ($check as $a)
                    @if ($a == "C10")
                        disabled
                    @endif
                @endforeach>C10</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="B1" @foreach ($check as $a)
                    @if ($a == "B1")
                        disabled
                    @endif
                @endforeach>B1</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="B2" @foreach ($check as $a)
                    @if ($a == "B2")
                        disabled
                    @endif
                @endforeach>B2</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="B3" @foreach ($check as $a)
                    @if ($a == "B3")
                        disabled
                    @endif
                @endforeach>B3</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="B4" @foreach ($check as $a)
                    @if ($a == "B4")
                        disabled
                    @endif
                @endforeach>B4</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="B5" @foreach ($check as $a)
                    @if ($a == "B5")
                        disabled
                    @endif
                @endforeach>B5</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="B6" @foreach ($check as $a)
                    @if ($a == "B6")
                        disabled
                    @endif
                @endforeach>B6</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="B7" @foreach ($check as $a)
                    @if ($a == "B7")
                        disabled
                    @endif
                @endforeach>B7</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="B8" @foreach ($check as $a)
                    @if ($a == "B8")
                        disabled
                    @endif
                @endforeach>B8</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="B9" @foreach ($check as $a)
                    @if ($a == "B9")
                        disabled
                    @endif
                @endforeach>B9</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="B10" @foreach ($check as $a)
                    @if ($a == "B10")
                        disabled
                    @endif
                @endforeach>B10</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="A1" @foreach ($check as $a)
                    @if ($a == "A1")
                        disabled
                    @endif
                @endforeach>A1</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="A2" @foreach ($check as $a)
                    @if ($a == "A2")
                        disabled
                    @endif
                @endforeach>A2</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="A3" @foreach ($check as $a)
                    @if ($a == "A3")
                        disabled
                    @endif
                @endforeach>A3</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="A4" @foreach ($check as $a)
                    @if ($a == "A4")
                        disabled
                    @endif
                @endforeach>A4</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="A5" @foreach ($check as $a)
                    @if ($a == "A5")
                        disabled
                    @endif
                @endforeach>A5</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="A6" @foreach ($check as $a)
                    @if ($a == "A6")
                        disabled
                    @endif
                @endforeach>A6</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="A7" @foreach ($check as $a)
                    @if ($a == "A7")
                        disabled
                    @endif
                @endforeach>A7</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="A8" @foreach ($check as $a)
                    @if ($a == "A8")
                        disabled
                    @endif
                @endforeach>A8</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="A9" @foreach ($check as $a)
                    @if ($a == "A9")
                        disabled
                    @endif
                @endforeach>A9</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="A10" @foreach ($check as $a)
                    @if ($a == "A10")
                        disabled
                    @endif
                @endforeach>A10</span>
            </div>
            <div class="col-md-4">
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="H11" @foreach ($check as $a)
                    @if ($a == "H11")
                        disabled
                    @endif
                @endforeach>H11</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="H12" @foreach ($check as $a)
                    @if ($a == "H12")
                        disabled
                    @endif
                @endforeach>H12</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="H13" @foreach ($check as $a)
                    @if ($a == "H13")
                        disabled
                    @endif
                @endforeach>H13</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="H14" @foreach ($check as $a)
                    @if ($a == "H14")
                        disabled
                    @endif
                @endforeach>H14</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="H15" @foreach ($check as $a)
                    @if ($a == "H15")
                        disabled
                    @endif
                @endforeach>H15</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="G11" @foreach ($check as $a)
                    @if ($a == "G11")
                        disabled
                    @endif
                @endforeach>G11</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="G12" @foreach ($check as $a)
                    @if ($a == "G12")
                        disabled
                    @endif
                @endforeach>G12</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="G13" @foreach ($check as $a)
                    @if ($a == "G13")
                        disabled
                    @endif
                @endforeach>G13</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="G14" @foreach ($check as $a)
                    @if ($a == "G14")
                        disabled
                    @endif
                @endforeach>G14</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="G15" @foreach ($check as $a)
                    @if ($a == "G15")
                        disabled
                    @endif
                @endforeach>G15</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="F11" @foreach ($check as $a)
                    @if ($a == "F11")
                        disabled
                    @endif
                @endforeach>F11</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="F12" @foreach ($check as $a)
                    @if ($a == "F12")
                        disabled
                    @endif
                @endforeach>F12</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="F13" @foreach ($check as $a)
                    @if ($a == "F13")
                        disabled
                    @endif
                @endforeach>F13</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="F14" @foreach ($check as $a)
                    @if ($a == "F14")
                        disabled
                    @endif
                @endforeach>F14</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="F15" @foreach ($check as $a)
                    @if ($a == "F15")
                        disabled
                    @endif
                @endforeach>F15</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="E11" @foreach ($check as $a)
                    @if ($a == "E11")
                        disabled
                    @endif
                @endforeach>E11</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="E12" @foreach ($check as $a)
                    @if ($a == "E12")
                        disabled
                    @endif
                @endforeach>E12</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="E13" @foreach ($check as $a)
                    @if ($a == "E13")
                        disabled
                    @endif
                @endforeach>E13</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="E14" @foreach ($check as $a)
                    @if ($a == "E14")
                        disabled
                    @endif
                @endforeach>E14</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="E15" @foreach ($check as $a)
                    @if ($a == "E15")
                        disabled
                    @endif
                @endforeach>E15</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="D11" @foreach ($check as $a)
                    @if ($a == "D11")
                        disabled
                    @endif
                @endforeach>D11</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="D12" @foreach ($check as $a)
                    @if ($a == "D12")
                        disabled
                    @endif
                @endforeach>D12</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="D13" @foreach ($check as $a)
                    @if ($a == "D13")
                        disabled
                    @endif
                @endforeach>D13</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="D14" @foreach ($check as $a)
                    @if ($a == "D14")
                        disabled
                    @endif
                @endforeach>D14</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="D15" @foreach ($check as $a)
                    @if ($a == "D15")
                        disabled
                    @endif
                @endforeach>D15</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="C11" @foreach ($check as $a)
                    @if ($a == "C11")
                        disabled
                    @endif
                @endforeach>C11</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="C12" @foreach ($check as $a)
                    @if ($a == "C12")
                        disabled
                    @endif
                @endforeach>C12</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="C13" @foreach ($check as $a)
                    @if ($a == "C13")
                        disabled
                    @endif
                @endforeach>C13</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="C14" @foreach ($check as $a)
                    @if ($a == "C14")
                        disabled
                    @endif
                @endforeach>C14</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="C15" @foreach ($check as $a)
                    @if ($a == "C15")
                        disabled
                    @endif
                @endforeach>C15</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="B11" @foreach ($check as $a)
                    @if ($a == "B11")
                        disabled
                    @endif
                @endforeach>B11</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="B12" @foreach ($check as $a)
                    @if ($a == "B12")
                        disabled
                    @endif
                @endforeach>B12</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="B13" @foreach ($check as $a)
                    @if ($a == "B13")
                        disabled
                    @endif
                @endforeach>B13</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="B14" @foreach ($check as $a)
                    @if ($a == "B14")
                        disabled
                    @endif
                @endforeach>B14</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="B15" @foreach ($check as $a)
                    @if ($a == "B15")
                        disabled
                    @endif
                @endforeach>B15</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="A11" @foreach ($check as $a)
                    @if ($a == "A11")
                        disabled
                    @endif
                @endforeach>A11</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="A12" @foreach ($check as $a)
                    @if ($a == "A12")
                        disabled
                    @endif
                @endforeach>A12</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="A13" @foreach ($check as $a)
                    @if ($a == "A13")
                        disabled
                    @endif
                @endforeach>A13</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="A14" @foreach ($check as $a)
                    @if ($a == "A14")
                        disabled
                    @endif
                @endforeach>A14</span>
                <span class="btn btn-secondary my-1 mx-1" style="width: 50px;"><input type="checkbox" class="form-control" name="no_kursi[]" value="A15" @foreach ($check as $a)
                    @if ($a == "A15")
                        disabled
                    @endif
                @endforeach>A15</span>
            </div>
        </div>
        <div class="container-fluid bg-dark text-white" style="border-radius: 10px;">
            <div class="row justify-content-center">
                <div class="col-md-2 py-3">
                    <a href="{{ route('info', $item->id_movie) }}" class="btn btn-info" style="font-size: 20px;"><i class="fas fa-backward"></i> <br> Kembali</a>
                </div>
                <div class="col-md-3 py-2">
                    Movie : {{ $item->movie->judul }} <br>
                    Studio : {{ $item->studio }} <br>
                    Tanggal : {{ Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }} <br>
                    Jam : {{ $item->jam }}
                </div>
                <div class="col-md-2 py-2">
                    Harga : {{ $item->movie->harga }} <br>
                    Jumlah Kursi : <span id="kursi"></span> <br>                     
                </div>
                <div class="col-md-2 py-2">
                    Total : <span id="total"></span><br>
                </div>
                <div class="col-md-2 py-3">
                    <button type="submit" class="btn btn-danger" style="font-size: 20px;">
                        <i class="fas fa-forward"></i> <br> Pesan Tiket
                    </button>
                </div>
            </div>
        </div>
        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
        <input type="hidden" value="{{ $item->id_movie }}" name="movie_id">
        <input type="hidden" value="{{ $item->id_jadwal }}" name="jadwal_id">
        <input type="hidden" value="" name="total_harga" id="total_harga">
    </form>
</div>
    

    <!-- Footer -->
<footer class="py-5 bg-dark footer">
    <div class="container-fluid">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>
@endsection

@push('addon-script')
    <script>
        $(document).ready(function() {
            $('input[type="checkbox"]').click(function() {
                var checkboxes = $('input:checkbox:checked').length;
                var harga = `{{ $item->movie->harga }}`;
                var total = checkboxes * harga;
                document.getElementById("total").innerHTML = total;
                document.getElementById("kursi").innerHTML = checkboxes;
                document.getElementById("total_harga").value = total;
            })
        });

        function validate(){
        var checked=false;
        var elements = document.getElementsByName("no_kursi[]");
        for(var i=0; i < elements.length; i++){
            if(elements[i].checked) {
                checked = true;
            }
        }
        if (!checked) {
            alert('Please select your seat.');
        }
        return checked;
        }
    </script>
@endpush