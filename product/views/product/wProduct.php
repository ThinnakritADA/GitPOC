<?php
    if(FCNbGetPdtFasionEnabled())
		{ //ถ้าเป็นแพคเกจสินค้าแฟชั่น
        $tPdtforSystemDataTable  = "5";
    }else{
        $tPdtforSystemDataTable  = "1";
    }
?>

<input id="ohdPdtStaBrowseType" type="hidden" value="<?php	echo $nPdtBrowseType?>">
<input id="ohdPdtCallBackOption" type="hidden" value="<?php echo $tPdtBrowseOption?>">
<input id="ohdPdtCurrentPageDataTable" type="hidden" value="1">
<input id="ohdPdtforSystemDataTable" type="hidden" value="<?=$tPdtforSystemDataTable?>">

<?php if(isset($nPdtBrowseType) && $nPdtBrowseType == 0) : //เข้ามาจาก Menu Product ทางซ้ายมือ?>
	<!-- Title Bar Menu Product -->
	<div id="odvPdtMainMenu" class="main-menu">
		<div class="xCNMrgNavMenu">
			<div class="row xCNavRow" style="width:inherit;">
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
					<ol id="oliMenuNav" class="breadcrumb xCNBCMenu xWProductBreadcrumb">
						<?php FCNxHADDfavorite('product/0/0');?> 
						<li id="oliPdtTitle" style="cursor:pointer">
							<?php echo language('product/product/product','tPDTTitle')?>
						</li>
						<li id="oliPdtTitleAdd" class="active">
							<a><?php echo language('product/product/product','tPDTTitleAdd')?></a>
						</li>
                        <li id="oliPdtTitleEdit" class="active">
							<a><?php echo language('product/product/product','tPDTTitleEdit')?></a>
						</li>
					</ol>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-right p-r-0">
					<div id="odvBtnPdtInfo">
						<?php if($aAlwEventPdt['tAutStaFull'] == 1 || $aAlwEventPdt['tAutStaAdd'] == 1) : ?>
							<button id="obtPdtCallPageAdd" class="xCNBTNPrimeryPlus" type="button">+</button>
						<?php endif; ?>
					</div>
					<div id="odvBtnPdtAddEdit">
						<button id="obtCallBackProductList" class="btn xCNBTNDefult xCNBTNDefult2Btn" type="button"> <?php echo language('common/main/main', 'tBack')?></button>
						<?php if($aAlwEventPdt['tAutStaFull'] == 1 || ($aAlwEventPdt['tAutStaAdd'] == 1 || $aAlwEventPdt['tAutStaEdit'] == 1)) : ?>
							<div class="btn-group xWHideSave">
								<button id="obtMainSaveProduct" type="button" class="btn xWBtnGrpSaveLeft"> 
									<?php echo language('common/main/main', 'tSave')?>
								</button>
								<?php echo $vBtnSave ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Menu Cump Product -->
	<div class="xCNMenuCump xCNPdtBrowseLine" id="odvMenuCump">&nbsp;</div>

	<!-- Div Content Product -->
	<div class="main-content">
        <div id="odvContentPageProduct" class="panel panel-headline">
	</div>

<?php else: ?>
	<!-- เข้ามาจากทาง Modal Browse Product -->
	<div class="modal-header xCNModalHead">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <a onclick="JCNxBrowseData('<?php echo $tPdtBrowseOption?>')" class="xWBtnPrevious xCNIconBack" style="float:left;">
                    <i class="fa fa-arrow-left xCNIcon"></i>	
                </a>
                <ol id="oliPvnNavBrowse" class="breadcrumb xCNMenuModalBrowse">
                    <li class="xWBtnPrevious" onclick="JCNxBrowseData('<?php echo $tPdtBrowseOption?>')"><a><?php echo language('common/main/main','tShowData');?> : <?php echo  language('payment/card/card','tCRDTitle')?></a></li>
                    <li class="active"><a><?php echo language('product/product/product','tPDTTitleAdd')?></a></li>
                </ol>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
                <div id="odvPvnBtnGroup" class="demo-button xCNBtngroup" style="width:100%;">
                    <button type="button" class="btn xCNBTNPrimery" onclick="$('#obtAddEditProduct').click()"><?php echo language('common/main/main', 'tSave')?></button>
                </div>
            </div>
        </div>
    </div>
	<div id="odvModalBodyBrowse" class="modal-body xCNModalBodyAdd">
    </div>
<?php endif; ?>


<!-- Modal Wanning Product Genaral-->
<div class="modal fade" id="odvModalWanningProductBarDup" tabindex="-1" role="dialog" style="overflow: hidden auto; z-index: 5000; display: none;">
    <div class="modal-dialog" id="modal-customsWanning" role="document" style="margin: 1.75rem auto;top:20%;">
        <div class="modal-content" id="odvModalBodyWanningProductBarDup">
            <div class="modal-header xCNModalHead">
                <h3 style="font-size:20px;color:#FFFF00;font-weight: 1000;"><i class="fa fa-exclamation-triangle"></i> <?php echo language('common/main/main', 'tModalWarning'); ?></h3>
            </div>
            <div class="modal-body"><?php echo language('common/main/main', 'tPdtEventAddProductValidateAgency'); ?></div>
            <div class="modal-footer">
                <button class="btn xCNBTNPrimery xCNBTNDefult2Btn xWBtnOK" type="button" id="obtConfirmProductBarDup">
                    <?php echo language('common/main/main', 'tCMNOK') ?>
                </button>
                <button class="btn xCNBTNDefult xCNBTNDefult2Btn xWBtnCancel" type="button" data-dismiss="modal">
                    <?php echo language('common/main/main', 'tCancel') ?>
                </button>
            </div>
        </div>
    </div>
</div>



<!-- Modal Wanning Product Import-->
<div class="modal fade" id="odvModalWanningProductBarDupImport" tabindex="-1" role="dialog" style="overflow: hidden auto; z-index: 8000; display: none;">
    <div class="modal-dialog" id="modal-customsWanning" role="document" style="margin: 1.75rem auto;top:20%;">
        <div class="modal-content" id="odvModalBodyWanningProductBarDupImport">
            <div class="modal-header xCNModalHead">
                <h3 style="font-size:20px;color:#FFFF00;font-weight: 1000;"><i class="fa fa-exclamation-triangle"></i> <?php echo language('common/main/main', 'tModalWarning'); ?></h3>
            </div>
            <div class="modal-body"><?php echo language('common/main/main', 'tPdtEventAddProductValidateAgency2'); ?></div>
            <div class="modal-footer">
                <button class="btn xCNBTNPrimery xCNBTNDefult2Btn xWBtnOK" type="button" id="obtConfirmProductBarDupImport">
                    <?php echo language('common/main/main', 'tCMNOK') ?>
                </button>
                <button class="btn xCNBTNDefult xCNBTNDefult2Btn xWBtnCancel" type="button" data-dismiss="modal">
                    <?php echo language('common/main/main', 'tCancel') ?>
                </button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
	var objValidateMsg = {
		'tPDTValidPdtPszAndBarCode'	: "<?php echo language('product/product/product','tPDTValidPdtPszAndBarCode');?>",
		'tPDTValidPdtPsz'			: "<?php echo language('product/product/product','tPDTValidPdtPsz');?>",
		'tPDTValidPdtBar'			: "<?php echo language('product/product/product','tPDTValidPdtBar');?>"
	};

	$('#oliPdtTitle').click(function(){
		JSvCallPageProductList();
	});

	$('#obtCallBackProductList').click(function(){
		JSvCallPageProductList($('#ohdPdtCurrentPageDataTable').val());
	});

	$('#obtPdtCallPageAdd').click(function(){
		JSvCallPageProductAdd();
	});
	
	$('#obtMainSaveProduct').click(function(){
		// alert('GotoSUbmit');
		// $('#obtSubmitProduct').click();
		JSxPDTCheckBarCodeBeforeSubmit();
	});

</script>
<script type="text/javascript" src="<?php echo base_url('application/modules/product/assets/src/product/jProduct.js?v=2')?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/TableDnD/0.9.1/jquery.tablednd.js" integrity="sha256-d3rtug+Hg1GZPB7Y/yTcRixO/wlI78+2m08tosoRn7A=" crossorigin="anonymous"></script>