<div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="text-center">Profils</h1>
            </div>
            <div class="panel-body">       
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" id="top_image" src="grr/no-avatar.png">
                    </div>
                    <div class="media-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div><strong>Lietotājvārds:</strong> user101</div>
                            </li>
                            <li class="list-group-item">
                                <div><strong>Pilnais vards:</strong> Test User</div>
                            </li>
                            <li class="list-group-item">
                                <div><strong>E-pasts:</strong> example@domain.com</div>
                            </li>
                            <li class="list-group-item">
                                <div><strong>Dzīmšanas diena:</strong> 01/01/2000</div>
                            </li>
                            <li class="list-group-item">
                                <div><strong>Intereses:</strong> Programmešana, ceļošana</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
		<a href='blog-add.php'><h3><label>Izveidot blogu.</label></h3><br></a>
        <label>Mani blogi:</label>   
			<?php
				include_once("user_blog_list.php");
			?>
        </div>
