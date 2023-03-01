<div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<h4 class="m-b-lg">
					Projeler
				</h4>

				<div class="card">
					<form action="../_class/yonetim_islem.php" method="POST">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-lg-12">
									<div class="btn-toolbar" role="toolbar">
										<a href="proje-ekle" class="btn btn-primary btn-sm mr-1">
											<i class="icon-plus font-12"></i> Yeni Proje Ekle </a>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-12">
									<div class="table-responsive">
										<div id="order-listingg_wrapper"
											class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
											<div class="row">
												<div class="col-sm-12 col-md-6">
													<div class="dataTables_length" id="order-listingg_length">
														<label>Sayfada <select name="order-listingg_length"
																aria-controls="order-listingg"
																class="form-control form-control-sm">
																<option value="5">5</option>
																<option value="10">10</option>
																<option value="15">15</option>
																<option value="0">Tümü</option>
															</select> kayıt göster</label>
													</div>
												</div>
												<div class="col-sm-12 col-md-6">
													<div id="order-listingg_filter" class="dataTables_filter">
														<label>Ara:<input type="search"
																class="form-control form-control-sm" placeholder=""
																aria-controls="order-listingg"></label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<table id="order-listingg"
														class="table table-bordered table-hover dataTable no-footer"
														role="grid" aria-describedby="order-listingg_info"
														style="width: 997px;">
														<thead class="headbg">
															<tr role="row">
																<th class="noshort sorting_disabled"
																	style="width: 38.8px;" data-toggle="tooltip"
																	data-placement="top" title="Tümünü Seç" rowspan="1"
																	colspan="1" aria-label="">
																	<input id="checkbox-4"
																		class="select-all checkbox-custom"
																		type="checkbox" style="width:100px;">
																	<label for="checkbox-4"
																		class="checkbox-custom-label mb-0"><span
																			class="checktext"></span></label>
																</th>
																<th class="secili sorting" tabindex="0"
																	aria-controls="order-listingg" rowspan="1"
																	colspan="1" style="width: 221.8px;"
																	aria-label="Başlık: artan sütun sıralamasını aktifleştir">
																	Başlık</th>
																<th class="secili sorting" tabindex="0"
																	aria-controls="order-listingg" rowspan="1"
																	colspan="1" style="width: 271.8px;"
																	aria-label="Kategori: artan sütun sıralamasını aktifleştir">
																	Kategori</th>
																<th style="width: 69.8px;"
																	class="secili text-center sorting" tabindex="0"
																	aria-controls="order-listingg" rowspan="1"
																	colspan="1"
																	aria-label="Anasayfa: artan sütun sıralamasını aktifleştir">
																	Anasayfa</th>
																<th style="width: 69.8px;"
																	class="secili text-center sorting" tabindex="0"
																	aria-controls="order-listingg" rowspan="1"
																	colspan="1"
																	aria-label="Durum: artan sütun sıralamasını aktifleştir">
																	Durum</th>
																<th style="width: 114.6px;"
																	class="text-center sorting_disabled" rowspan="1"
																	colspan="1" aria-label="İşlem">İşlem</th>
															</tr>
														</thead>
														<tbody id="sortable" class="ui-sortable">
															<tr class="odd">
																<td valign="top" colspan="6" class="dataTables_empty">
																	Tabloda herhangi bir veri mevcut değil</td>
															</tr>
														</tbody>
													</table>
													<div id="order-listingg_processing"
														class="dataTables_processing card" style="display: none;">
														İşleniyor...</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12 col-md-5">
													<div class="dataTables_info" id="order-listingg_info" role="status"
														aria-live="polite">Kayıt yok</div>
												</div>
												<div class="col-sm-12 col-md-7">
													<div class="dataTables_paginate paging_simple_numbers"
														id="order-listingg_paginate">
														<ul class="pagination">
															<li class="paginate_button page-item previous disabled"
																id="order-listingg_previous"><a href="#"
																	aria-controls="order-listingg" data-dt-idx="0"
																	tabindex="0" class="page-link">Önceki</a></li>
															<li class="paginate_button page-item next disabled"
																id="order-listingg_next"><a href="#"
																	aria-controls="order-listingg" data-dt-idx="1"
																	tabindex="0" class="page-link">Sonraki</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>





					</form>
				</div>



			</div><!-- END column -->
		</div>
	</section><!-- #dash-content -->
</div>