<div class="col-sm-6">
    <div class="panel">
        <div class="panel-body p-t-10">
            <div class="media-main">
                <a class="pull-left" href="#">
                    <img class="thumb-lg img-circle bx-s" src="https://bootdey.com/img/Content/user_1.jpg" alt="">
                </a>
                <form action="{{ route('contact.destroy',['contact'=>$contact])}}" method="POST" class="inline">
                    @csrf
                    @method('delete')
                    <div class="pull-right btn-group-sm">

                        <!--<a href="#" class="btn btn-success tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit">
                            <i class="fa fa-pencil"></i>
                        </a>-->
                        <a  href="{{ route('contact.edit',compact('contact')) }}" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <button type="submit" class="btn btn-danger tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                            <i class="fa fa-close"></i>
                        </button>
                    </div>
                </form>
                <div class="info">
                    <h4>{{ $contact->name}}</h4>
                    <a href="tel:+221{{ $contact->telephonePrimaire }}">{{ $contact->telephonePrimaire }}</a><br>
                    <a href = "mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                    <p class="text-muted">{{ $contact->adresse }}</p>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <ul class="social-links list-inline p-b-10">
                <li>
                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                </li>
                <li>
                    <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Message"><i class="fa fa-envelope-o"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
