
		<script id="questiontemplate" type="text/x-jsrender">
			<div data-sortnum="{{:sortnum}}" data-id="{{:id}}" data-maxselect="{{:maxselect}}" data-canselsame="{{:canselsame}}" class="question">
				<fieldset data-uk-margin>
					<legend>{{:questionname}}</legend>
					<div id="{{:id}}list" class="uk-scrollable-box uk-width-1-1 uk-height-1-1">
						{{if type=="0"}} {{for options tmpl="#singlesel" /}} {{/for}} {{else if type=="1"}} {{for options tmpl="#muiltselect" /}} {{/for}} {{else if type=="2"}} {{for options tmpl="#textaera" /}} {{/for}} {{else if type=="3"}}
						<div data-uk-button-radio>
							<div class="uk-grid">
								{{for options tmpl="#singleimgsel" /}} {{/for}}
							</div>
						</div>
						{{else if type=="4"}}
						<div data-uk-button-checkbox>
							<div class="uk-grid">
								{{for options tmpl="#muiltimgsel" /}} {{/for}}
							</div>
						</div>
						{{/if}}
					</div>
				</fieldset>
			</div>
		</script>
		<!--单选模版-->
		<script id="singlesel" type="text/x-jsrender">
			<div class="uk-width-1-1">
				<label>
					<input type="radio" name="{{:questionid}}" value="{{:id}}"> {{:optiontitle}}</label>
			</div>
		</script>
		<!--多选模版-->
		<script id="muiltselect" type="text/x-jsrender">
			<div class="uk-width-1-1">
				<label>
					<input type="checkbox" name="{{:questionid}}" value="{{:id}}"> {{:optiontitle}}/label>
			</div>
		</script>
		<!--问答模版-->
		<script id="textaera" type="text/x-jsrender">
			<div class="uk-width-1-1">
				<legend>{{:optiontitle}}</legend>
				<textarea class="uk-width-1-1" data-id="{{:id}}" data-parent="{{:questionid}}" rows="20"></textarea>
			</div>
		</script>
		<!--图片单选模版-->
		<script id="singleimgsel" type="text/x-jsrender">
			<div class="uk-width-1-2">
				<div class="uk-panel uk-panel-box uk-container-center uk-margin-small-top">
					<div class="imgdiv uk-width-1-1 uk-vertical-align" data-uk-modal="{target:'#{{:id}}'}">
						<img src="img/{{:imgsrc}}" class="uk-vertical-align-middle uk-align-center" />
					</div>
					<p class="uk-article-meta uk-text-truncate">{{:optiontitle}}
					</p>
					<a class="uk-button uk-button-primary uk-button-large uk-width-1-1 uk-border-rounded">投票给他</a>
				</div>
				<div id="{{:id}}" class="uk-modal" aria-hidden="true" style="display: none; overflow-y: auto;">
					<div class="uk-modal-dialog">
						<div class="uk-width-1-1">
							<img src="img/{{:imgsrc}}" class="uk-width-1-1" />
						</div>
						<p class="uk-article-meta uk-">{{:optiontitle}}
						</p>
						<p class="uk-article-meta">{{:imgdescribe}}
						</p>
					</div>
				</div>
			</div>
		</script>
		<!--图片多选模版-->
		<script id="muiltimgsel" type="text/x-jsrender">
			<div class="uk-width-1-2">
				<div class="uk-panel uk-panel-box uk-container-center uk-margin-small-top">
					<div class="imgdiv uk-width-1-1 uk-vertical-align" data-uk-modal="{target:'#{{:id}}'}">
						<img src="img/{{:imgsrc}}" class="uk-vertical-align-middle uk-align-center" />
					</div>
					<p class="uk-article-meta uk-text-truncate">{{:optiontitle}}
					</p>
					<a class="uk-button uk-button-success uk-button-large uk-width-1-1 uk-border-rounded">投票给他</a>
				</div>
				<div id="{{:id}}" class="uk-modal" aria-hidden="true" style="display: none; overflow-y: auto;">
					<div class="uk-modal-dialog">
						<div class="uk-width-1-1">
							<img src="img/{{:imgsrc}}" class="uk-width-1-1" />
						</div>
						<p class="uk-article-meta uk-text-bold">{{:optiontitle}}
						</p>
						<p class="uk-article-meta">{{:imgdescribe}}
						</p>
					</div>
				</div>
			</div>
