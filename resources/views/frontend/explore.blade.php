@extends("frontend/template/master")
@section('content')

    <main id="explore">
        <ul class="explore__users">
            <li class="explore__user">
                
                <div class="explore__user-column">
                    <img src="{{ url('frontend/images/avatar.jpg') }}" class="explore__avatar"/>
                    <div class="explore__info">
                        <span class="explore__username">inthetiger</span>
                        <span class="explore__full-name">Lynn Park</span>
                    </div>
                </div>
                <div class="explore__user-column">
                    <button>Follow</button>
                </div>
            </li>
            <li class="explore__user">
                    
                    <div class="explore__user-column">
                        <img src="{{ url('frontend/images/avatar.jpg') }}" class="explore__avatar"/>
                        <div class="explore__info">
                            <span class="explore__username">inthetiger</span>
                            <span class="explore__full-name">Lynn Park</span>
                        </div>
                    </div>
                    <div class="explore__user-column">
                        <button>Follow</button>
                    </div>
                </li>
                <li class="explore__user">
                        
                        <div class="explore__user-column">
                            <img src="{{ url('frontend/images/avatar.jpg') }}" class="explore__avatar"/>
                            <div class="explore__info">
                                <span class="explore__username">inthetiger</span>
                                <span class="explore__full-name">Lynn Park</span>
                            </div>
                        </div>
                        <div class="explore__user-column">
                            <button>Follow</button>
                        </div>
                    </li>
        </ul>
    </main>

@endsection