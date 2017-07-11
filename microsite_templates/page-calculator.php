<!DOCTYPE html>
<html lang="en">
			<head>
						<title>Needs Analyzer</title>
						<meta charset="utf-8">
						<meta name="viewport" content="width=device-width, initial-scale=1.0">
						<link rel="icon" href="img/favicon.ico?ver=2" type="image/x-icon">
						<link rel="shortcut icon" href="img/favicon.ico?ver=2" type="image/x-icon" />
						<meta name="description" content="AQ2E Agent Marketing Site">
						<meta name="keywords" content="aq2e, marketing, site">
						<meta name="author" content="AgentQuote.com, Inc.">
						<meta name = "format-detection" content = "telephone=no" />
						
						<? aq2emm_load_page_styles() ?>
						
			</head>
			
			<body class="needs needs-page" >
						<!--header-->
						<a name="getAQuoteBanner"></a>
						<header id="stuck_container">
									<div class="agent-header">
												<div class="container">
															<div class="row">
																		<div class="col-md-6">
		                    <span class="logo-old">
                                <a href="/"><img src="<?= aq2emm_get_logo(); ?>" style="border:none;" /></a>
		                    </span>
																		</div>
																		<div class="col-md-6">
		               
		                   <span class="company-name">

		                   <?php get_dynamic_pages_template_part( aq2emm_selected_theme().'partials/header', 'social-links' ); ?>
  
                     <?= aq2emm_get_name(); ?>
		                   </span>
																		</div>
															</div>
												</div>
									</div>
		  
		  <?php get_dynamic_pages_template_part( aq2emm_selected_theme().'partials/header', 'main-menu' ); ?>
									
									<div class="agent-phone-container">
												<div class="container">
															<div class="row">
																		<div class="col-md-6">
																		
																		</div>
																		<div class="col-md-6">
																					<span class="agent-phone"><i class="fa fa-phone fa-fw header-font"></i>Call Us <?php echo aq2emm_get_phone(); ?></span>
																		</div>
															</div>
												</div>
									
									</div>
						
	</header>


<section class="text-info-container">
    <div class="text-info">
        <div class="container">

            <div class="row wow fadeInLeft animated">
                <div class="col-md-12">
                    <div class="caption">
                        <p class="title">Coverage That Gives You More</p>
                        <p class="description">Term Life Insurance</p>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
    
</section>

<section>

    <div class="content">
        <div class="container">

            <div class="needs-analyzer-container">
                        
                <h2 class="na-header">Needs Analyzer</h2>

                <div class="needs-analyzer">
                    
                    <div class="row">
                        
                        <div class="col-md-4 no-r-padding">
                            <ul>
                                <li><a href="#"><span class="na-header">Part I: Family Income<br>Replacement</span></a></li>
                                <li><a href="#"><span class="na-btn selected" data-item="family-income" data-page="family"><i class="fa fa-users aq-fa"></i><span class="text"></span>Family Income</span></a></li>
                                
                                <li class="inline-section family-page-inline">

                                  <!-- For Small Screen -->                                  
                                  <div class="page-inline inline-controls">
                                    <div class="form-group">
                                      <label for="gross">Your Gross Income ?</label>
                                      <label class="sr-only" for="gross">Amount (in dollars)</label>
                                      <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                        <input type="text" class="form-control input-lg" data-group="family" id="inline-gross" data-name="gross" data-required="true" data-format="float" data-error="Please provide a valid gross income." placeholder="Your Gross Income">
                                       <!-- <div class="input-group-addon">.00</div> -->
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="spouseGross">Spouse's Gross Income (Only include if this income would stop if you were to die) ?</label>
                                      <label class="sr-only" for="spouseGross">Spouse's Gross Income (Only include if this income would stop if you were to die) ?</label>
                                      <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                        <input type="text" class="form-control input-lg" data-group="family" id="inline-spouseGross" data-name="spouseGross" data-required="true" data-format="float" data-error="Please provide a valid gross income." placeholder="Your Gross Income">
                                       <!-- <div class="input-group-addon">.00</div> -->
                                      </div>
                                    </div>        

                                    <div class="form-group">
                                      <label for="other">Other Gross Income (Only include if this income would stop if you were to die.) ?</label>
                                      <label class="sr-only" for="other">Other Gross Income (Only include if this income would stop if you were to die.) ?</label>
                                      <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                        <input type="text" class="form-control input-lg" data-group="family" id="inline-other" data-name="other" data-required="true" data-format="float" data-error="Please provide a valid gross income." placeholder="Other Gross Income">
                                       <!-- <div class="input-group-addon">.00</div> -->
                                      </div>
                                    </div>                                           

                                    <div class="form-group">
                                      <label class="useful-text" for="totalGross">TOTAL GROSS INCOME TO BE REPLACED</label>
                                      <label class="sr-only" for="totalGross">TOTAL GROSS INCOME TO BE REPLACED</label>
                                      <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                        <input type="text" class="form-control input-lg" data-group="family" id="inline-totalGross" data-name="inline-totalGross" data-required="true" data-format="float" data-error="Please provide a valid gross income." data-readonly="true" placeholder="0.00">
                                       <!-- <div class="input-group-addon">.00</div> -->
                                      </div>
                                    </div>
                                    <p id="inline-disclaimer">
                                        
                                    </p>
                                  </div><!-- page-inline -->   

                                </li><!-- family-page-inline -->                           

                                <li><a href="#"><span class="na-btn" data-item="income-to-replace" data-page="toReplace"><i class="fa fa-refresh aq-fa"></i><span class="text">Income To Be Replaced</span></span></a></li>

                                <li class="inline-section toReplace-page-inline">

                                  <!-- For Small Screen -->                                  
                                  <div class="page-inline inline-controls">

                                      <div class="form-group">
                                        <label for="percentIncome">Desired annual income needs (typically 70-80% of current combined income) ?</label>
                                        <label class="sr-only" for="percentIncome">Desired annual income needs (typically 70-80% of current combined income) ?</label>
                                        <div class="input-group">
                                        <!--  <div class="input-group-addon"><i class="fa fa-dollar"></i></div> -->
                                          <input type="text" class="form-control input-lg" data-group="toReplace" id="inline-percentIncome" data-name="percentIncome" data-required="true" data-format="percent" data-error="Please provide a valid gross income." placeholder="80" value="80">
                                          <div class="input-group-addon"><i class="fa fa-percent"></i></div>
                                        </div>
                                      </div>   

                                      <div class="form-group">
                                        <label class="goal-text" for="totalReplace">TOTAL REPLACEMENT INCOME NEEDED</label>
                                        <label class="sr-only" for="totalReplace">TOTAL REPLACEMENT INCOME NEEDED</label>
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                          <input type="text" class="form-control input-lg" data-group="toReplace" id="inline-totalReplace" data-name="totalReplace" data-required="true" data-format="float" data-error="Please provide a valid gross income." data-readonly="true" placeholder="0.00" value="0.00">
                                         <!-- <div class="input-group-addon">.00</div> -->
                                        </div>
                                      </div> 


                                      <div class="form-group">
                                        <label for="yearsIncomeNeed">Years Income Needed ?</label>
                                        <label class="sr-only" for="yearsIncomeNeed">Years Income Needed ?</label>
                                        <div class="input-group">
                                          <!-- <div class="input-group-addon"><i class="fa fa-dollar"></i></div> -->
                                          <input type="text" class="form-control input-lg" data-group="life" id="inline-yearsIncomeNeed" data-name="yearsIncomeNeed" data-required="false" data-format="number" data-error="" data-readonly="false" placeholder="10" value="10">
                                          <div class="input-group-addon">yrs</div>
                                       </div>
                                      </div>  


                                      <div class="row">

                                          <div class="col-md-4"> 

                                            <div class="form-group">
                                              <label class="text" for="netRateOfReturn">Net Rate of Return</label>
                                              <label class="sr-only" for="netRateOfReturn">Net Rate of Return</label>
                                              <div class="input-group">
                                                <!-- <div class="input-group-addon"><i class="fa fa-dollar"></i></div> -->
                                                <input type="text" class="form-control input-lg" data-group="life" id="inline-netRateOfReturn" data-name="netRateOfReturn" data-required="false" data-format="percent" data-error="" data-readonly="true" placeholder="3" value="3">
                                                <div class="input-group-addon"><i class="fa fa-percent"></i></div>
                                              </div>
                                            </div>

                                          </div>

                                          <div class="col-md-4">    

                                              <div class="form-group">
                                                <label for="rateOfReturn">Rate of Return ?</label>
                                                <label class="sr-only" for="rateOfReturn">Rate of Return ?</label>
                                                <div class="input-group">
                                                  <!-- <div class="input-group-addon"><i class="fa fa-dollar"></i></div> -->
                                                  <input type="text" class="form-control input-lg" data-group="life" id="inline-rateOfReturn" data-name="rateOfReturn" data-required="false" data-format="percent" data-error="" data-readonly="false" placeholder="6" value="6">
                                                  <div class="input-group-addon"><i class="fa fa-percent"></i></div>
                                                </div>
                                              </div>                                                           

                                          </div><!-- col -->

                                          <div class="col-md-4">    

                                              <div class="form-group">
                                                <label for="inflationRate">Rate of Inflation ?</label>
                                                <label class="sr-only" for="inflationRate">Rate of Inflation ?</label>
                                                <div class="input-group">
                                                  <!-- <div class="input-group-addon"><i class="fa fa-dollar"></i></div> -->
                                                  <input type="text" class="form-control input-lg" data-group="life" id="inline-inflationRate" data-name="inflationRate" data-required="false" data-format="percent" data-error="" data-readonly="false" placeholder="3" value="3">
                                                  <div class="input-group-addon"><i class="fa fa-percent"></i></div>
                                                </div>
                                              </div>                                                           

                                          </div><!-- col -->
                                      
                                      </div><!-- row -->

                                      <div class="form-group">
                                        <label class="useful-text" for="lifeInsuranceNeeded">INITIAL LIFE INSURANCE NEEDED TO REPLACE INCOME<br>(BEFORE OTHER CALCULATIONS)</label>
                                        <label class="sr-only" for="lifeInsuranceNeeded">INITIAL LIFE INSURANCE NEEDED TO REPLACEME INCOME<br>(BEFORE OTHER CALCULATIONS)</label>
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                          <input type="text" class="form-control input-lg" data-group="toReplace" id="inline-lifeInsuranceNeeded" data-name="inline-lifeInsuranceNeeded" data-required="false" data-format="float" data-error="" data-readonly="true" placeholder="0.00" value="0.00">
                                          <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                        </div>
                                      </div> 

                                  </div><!-- page-inline -->
                                </li><!-- toReplace-page-inline -->

                                <li><a href="#"><span class="na-btn" data-item="avail-invest_fam-assets" data-page="familyAssets"><i class="fa fa-university aq-fa"></i><span class="text">Available Investible<br>Family Assets</span></span></a></li>


                                <li class="inline-section familyAssets-page-inline">

                                  <!-- For Small Screen -->                                  
                                  <div class="page-inline inline-controls">

                                      <div class="form-group">
                                        <label class="" for="">Savings ?</label>
                                        <label class="sr-only" for="">Savings ?</label>
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                          <input type="text" class="form-control input-lg" data-group="familyAssets" id="inline-savings" data-name="savings" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                          <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                        </div>
                                      </div>
                                      
                                      <div class="form-group">
                                        <label class="" for="investment">Investment Portfolio ?</label>
                                        <label class="sr-only" for="investment">Investment Portfolio ?</label>
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                          <input type="text" class="form-control input-lg" data-group="familyAssets" id="inline-investment" data-name="investment" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                          <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                        </div>
                                      </div>                                             

                                      <div class="form-group">
                                        <label class="" for="lifeInsurance">Current Life Insurance ?</label>
                                        <label class="sr-only" for="lifeInsurance">Current Life Insurance ?</label>
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                          <input type="text" class="form-control input-lg" data-group="familyAssets" id="inline-lifeInsurance" data-name="lifeInsurance" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                          <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                        </div>
                                      </div>                                                
                                      
                                      <div class="form-group">
                                        <label class="" for="other">Other Assets ?</label>
                                        <label class="sr-only" for="other">Other Assets ?</label>
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                          <input type="text" class="form-control input-lg" data-group="familyAssets" id="inline-other" data-name="other" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                          <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                        </div>
                                      </div>                                                                                                                                        
                                      
                                      <div class="form-group">
                                        <label class="useful-text" for="totalAvailAsset">TOTAL AVAILABLE ASSETS</label>
                                        <label class="sr-only" for="totalAvailAsset">TOTAL AVAILABLE ASSETS</label>
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                          <input type="text" class="form-control input-lg" data-group="familyAssets" id="inline-totalAvailAsset" data-name="inline-totalAvailAsset" data-required="false" data-format="float" data-error="" data-readonly="true" placeholder="0.00" value="0.00">
                                          <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                        </div>
                                      </div>                                  

                                  </div><!-- page-inline -->
                                </li><!-- familyAssets-page-inline -->

                                <li><a href="#"><span class="na-header">Part II: Debt, College, And<br>Other Funds Needed</span></a></li>
                                <li><a href="#"><span class="na-btn" data-item="debt-replacement" data-page="debt"><i class="fa fa-minus-circle aq-fa"></i><span class="text">Debt Repayment</span></span></a></li>

                                <li class="inline-section debt-page-inline">

                                  <!-- For Small Screen -->                                  
                                  <div class="page-inline inline-controls">

                                      <div class="form-group">
                                        <label class="text" for="mortgage">Mortgage ?</label>
                                        <label class="sr-only" for="mortgage">Mortgage ?</label>
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                          <input type="text" class="form-control input-lg" data-group="debt" id="inline-mortgage" data-name="mortgage" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                          <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                        </div>
                                      </div>                                                  

                                      <div class="form-group">
                                        <label class="text" for="autoLoan">Auto Loan ?</label>
                                        <label class="sr-only" for="autoLoan">Auto Loan ?</label>
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                          <input type="text" class="form-control input-lg" data-group="debt" id="inline-autoLoan" data-name="autoLoan" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                          <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                        </div>
                                      </div>   

                                      <div class="form-group">
                                        <label class="text" for="consumerDebt">Consumer Debt ?</label>
                                        <label class="sr-only" for="consumerDebt">Consumer Debt ?</label>
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                          <input type="text" class="form-control input-lg" data-group="debt" id="inline-consumerDebt" data-name="consumerDebt" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                          <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                        </div>
                                      </div>   

                                      <div class="form-group">
                                        <label class="text" for="otherDebt">Other Debt</label>
                                        <label class="sr-only" for="otherDebt">Other Debt</label>
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                          <input type="text" class="form-control input-lg" data-group="debt" id="inline-otherDebt" data-name="otherDebt" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                          <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                        </div>
                                      </div>   

                                      <div class="form-group">
                                        <label class="important-text" for="totalDebt">TOTAL DEBT</label>
                                        <label class="sr-only" for="totalDebt">TOTAL DEBT</label>
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                          <input type="text" class="form-control input-lg" data-group="debt" id="inline-totalDebt" data-name="inline-totalDebt" data-required="false" data-format="float" data-error="" data-readonly="true" placeholder="0.00" value="0.00">
                                          <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                        </div>
                                      </div>

                                  </div><!-- page-inline -->
                                </li><!-- debt-page-inline -->

                                <li><a href="#"><span class="na-btn" data-item="college-funding" data-page="college"><i class="fa fa-graduation-cap aq-fa"></i><span class="text">College Funding</span></span></a></li>

                                <li class="inline-section college-page-inline">

                                  <!-- For Small Screen -->                                  
                                  <div class="page-inline">

                                      <div class="row">
                                          <div class="col-md-12">
                                              <p>
                                                  According to the College&#44; college costs increase an average of 6% per year. If the insured died tomorrow ROI could be used&#44; however it is not used here because if the insured lived 5&#44; 10&#44; 15 years or more&#44; the amount of money from the insurance proceeds for college would be significantly less than what would be needed&#44; consequently&#44; we used only the 6% college inflation factor for Net Future Value (NFV). We are also assuming there is no direct savings for college happening.
                                              </p>

                                              <button type="button" class="info-text">Note: According to the College Board the 2015-2016 average 4 year college cost including Tuition&#44; Fees&#44; Room &amp; Board is: Private $180&#44;680; Public $84&#44;816</button>
                                          </div>
                                      </div>    

                                      <div class="row">
                                          <div class="col-md-12">
                                              
                                              <div class="form-container">

                                                  <form class='college-form'>

                                                    <div class="form-group">
                                                      <div class="inner-addon left-addon left-textfield-icon">
                                                          <select class="form-control children-select">
                                                            <option selected="selected">Number of Children</option>
                                                            <option>0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                          </select>
                                                      </div>
                                                    </div><!-- form-group -->

                                                                                     
                                                  </form>
                                              
                                                  <div class="row">
                                                      <div class="col-md-7">
                                                          <div class="children-container"></div>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <div class="childrens-total-container">
                                                              
                                                              <span class="childrens-totals" id="inline-totalCollegeCosts" data-readonly="true">
                                                                  
                                                              </span>

                                                          </div>
                                                      </div>
                                                  </div><!-- row -->

                                              </div><!-- form-container -->

                                          </div><!-- col -->

                                          
                                      </div><!-- row -->



                                  </div><!-- page-inline -->
                                </li><!-- college-page-inline -->
                                
                                <li><a href="#"><span class="na-btn" data-item="other-expenses" data-page="other"><i class="fa fa-balance-scale aq-fa"></i><span class="text">Other Expenses</span></span></a></li>

                                <li class="inline-section other-page-inline">

                                  <!-- For Small Screen -->                                  
                                  <div class="page-inline">

                                        <div class="form-group">
                                          <label class="text" for="funeral">Funeral (typical cost of a funeral is approx. $5,000) ?</label>
                                          <label class="sr-only" for="funeral">Funeral (typical cost of a funeral is approx. $5,000) ?</label>
                                          <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                            <input type="text" class="form-control input-lg" data-group="other" id="inline-funeral" data-name="funeral" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                            <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                          </div>
                                        </div>                                                    

                                        <div class="form-group">
                                          <label class="text" for="bequests">Special Bequests ?</label>
                                          <label class="sr-only" for="bequests">Special Bequests ?</label>
                                          <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                            <input type="text" class="form-control input-lg" data-group="other" id="inline-bequests" data-name="bequests" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                            <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                          </div>
                                        </div>      

                                        <div class="form-group">
                                          <label class="text" for="otherExpenses">Other Expenses ?</label>
                                          <label class="sr-only" for="otherExpenses">Other Expenses ?</label>
                                          <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                            <input type="text" class="form-control input-lg" data-group="other" id="inline-otherExpenses" data-name="otherExpenses" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                            <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                          </div>
                                        </div>   

                                        <div class="form-group">
                                          <label class="important-text" for="totalExpenses">TOTAL EXPENSES</label>
                                          <label class="sr-only" for="totalExpenses">TOTAL EXPENSES</label>
                                          <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                            <input type="text" class="form-control input-lg" data-group="other" id="inline-totalExpenses" data-name="inline-totalExpenses" data-required="false" data-format="float" data-error="" data-readonly="true" placeholder="0.00" value="0.00">
                                            <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                          </div>
                                        </div>

                                  </div><!-- page-inline -->
                                </li><!-- other-page-inline -->

                                <li><a href="#"><span class="na-btn total-sect" data-item="total-insur-needed" data-page="total"><i class="fa fa-umbrella aq-fa"></i><span class="text">Total Insurance Needed</span></span></a></li>

                                <li class="inline-section total-page-inline">

                                  <!-- For Small Screen -->                                  
                                  <div class="page-inline">


                                      <div class="form-group">
                                        <label class="text" for="inline-totalPart1">Income Replacement Insurance Needed (Part I)</label>
                                        <label class="sr-only" for="inline-totalPart1">Income Replacement Insurance Needed (Part I)</label>
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                          <input type="text" class="form-control input-lg" data-group="total" id="inline-totalPart1" data-name="inline-totalPart1" data-required="false" data-format="float" data-error="" data-readonly="true" placeholder="0.00" value="0.00">
                                          <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                        </div>
                                      </div>                                                    

                                      <div class="form-group">
                                        <label class="text" for="inline-totalPart2">Total Additional Expenses (Part II)</label>
                                        <label class="sr-only" for="inline-totalPart2">Total Additional Expenses (Part II)</label>
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                          <input type="text" class="form-control input-lg" data-group="total" id="inline-totalPart2" data-name="inline-totalPart2" data-required="false" data-format="float" data-error="" data-readonly="true" placeholder="0.00" value="0.00">
                                          <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                        </div>
                                      </div>                                                    

                                      <div class="total-life-insurance-big-box">

                                        <span class="header">Total Insurance Needed</span>

                                        <h2>$<span id="inline-totalNeededBigDisplay" ></span>
                                            <a href="/"><span class="inline-button" id="inline-totalNeededBigDisplay" >Click Here to Get A Quote</span></a>
                                        </h2>



                                      </div><!-- total-life-insurance-big-box -->


                                  </div><!-- page-inline -->
                                </li><!-- total-page-inline -->   

                            </ul>
                        </div>

                        <div class="col-md-8 no-l-padding">

                            <div class="body">

                                <div class="total-life-insurance-box">

                                    <h2>Total Insurance Needed: $<span id="totalNeededDisplay">0.00</span></h2>

                                </div><!-- total-life-insurance-box -->

                                <div class="sect family-income hide start">
                                    <h2>Family Income</h2>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="form-container">

                                                <form class="main-form">

                                                  <div class="form-group">
                                                    <label for="gross">Your Gross Income ?</label>
                                                    <label class="sr-only" for="gross">Amount (in dollars)</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="family" id="gross" data-name="gross" data-required="true" data-format="float" data-error="Please provide a valid gross income." placeholder="Your Gross Income">
                                                     <!-- <div class="input-group-addon">.00</div> -->
                                                    </div>
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="spouseGross">Spouse's Gross Income (Only include if this income would stop if you were to die) ?</label>
                                                    <label class="sr-only" for="spouseGross">* Spouse's Gross Income (Only include if this income would stop if you were to die) ?</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="family" id="spouseGross" data-name="spouseGross" data-required="true" data-format="float" data-error="Please provide a valid gross income." placeholder="Your Gross Income">
                                                     <!-- <div class="input-group-addon">.00</div> -->
                                                    </div>
                                                  </div>        

                                                  <div class="form-group">
                                                    <label for="other">Other Gross Income (Only include if this income would stop if you were to die) ?</label>
                                                    <label class="sr-only" for="other">Other Gross Income (Only include if this income would stop if you were to die) ?</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="family" id="other" data-name="other" data-required="true" data-format="float" data-error="Please provide a valid gross income." placeholder="Other Gross Income">
                                                     <!-- <div class="input-group-addon">.00</div> -->
                                                    </div>
                                                  </div>                                           

                                                  <div class="form-group">
                                                    <label class="useful-text" for="totalGross">TOTAL GROSS INCOME TO BE REPLACED</label>
                                                    <label class="sr-only" for="totalGross">TOTAL GROSS INCOME TO BE REPLACED</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="family" id="totalGross" data-name="totalGross" data-required="true" data-format="float" data-error="Please provide a valid gross income." data-readonly="true" placeholder="0.00">
                                                     <!-- <div class="input-group-addon">.00</div> -->
                                                    </div>
                                                  </div>  
                                                                                  
                                                  <p class="disclaimer">
                                                    
                                                  </p>                                                                                   
                                                  
                                                </form>
                                                

                                            </div><!-- form-container -->

                                        </div>
                                    </div>
                                </div><!-- family-income -->

                                <div class="sect income-to-replace">
                                    <h2>Income To Be Replaced</h2>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="form-container">

                                                <form class="main-form">

                                                  <div class="form-group">
                                                    <label for="percentIncome">Desired annual income needs (typically 70-80% of current combined income) ?</label>
                                                    <label class="sr-only" for="percentIncome">Desired annual income needs (typically 70-80% of current combined income) ?</label>
                                                    <div class="input-group">
                                                    <!--  <div class="input-group-addon"><i class="fa fa-dollar"></i></div> -->
                                                      <input type="text" class="form-control input-lg" data-group="toReplace" id="percentIncome" data-name="percentIncome" data-required="true" data-format="percent" data-error="Please provide a valid gross income." placeholder="80" value="80">
                                                      <div class="input-group-addon"><i class="fa fa-percent"></i></div>
                                                    </div>
                                                  </div>   

                                                  <div class="form-group">
                                                    <label class="goal-text" for="totalReplace">TOTAL REPLACEMENT INCOME NEEDED</label>
                                                    <label class="sr-only" for="totalReplace">TOTAL REPLACEMENT INCOME NEEDED</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="toReplace" id="totalReplace" data-name="totalReplace" data-required="true" data-format="float" data-error="Please provide a valid gross income." data-readonly="true" placeholder="0.00" value="0.00">
                                                     <!-- <div class="input-group-addon">.00</div> -->
                                                    </div>
                                                  </div> 


                                                  <div class="form-group">
                                                    <label for="yearsIncomeNeed">Years Income Needed ?</label>
                                                    <label class="sr-only" for="yearsIncomeNeed">Years Income Needed ?</label>
                                                    <div class="input-group">
                                                      <!-- <div class="input-group-addon"><i class="fa fa-dollar"></i></div> -->
                                                      <input type="text" class="form-control input-lg" data-group="life" id="yearsIncomeNeed" data-name="yearsIncomeNeed" data-required="false" data-format="number" data-error="" data-readonly="false" placeholder="10" value="10">
                                                      <div class="input-group-addon">year(s)</div>
                                                   </div>
                                                  </div>  


                                                  <div class="row">

                                                      <div class="col-md-4"> 

                                                        <div class="form-group">
                                                          <label class="text" for="netRateOfReturn">Net Rate of Return</label>
                                                          <label class="sr-only" for="netRateOfReturn">Net Rate of Return</label>
                                                          <div class="input-group">
                                                            <!-- <div class="input-group-addon"><i class="fa fa-dollar"></i></div> -->
                                                            <input type="text" class="form-control input-lg" data-group="life" id="netRateOfReturn" data-name="netRateOfReturn" data-required="false" data-format="percent" data-error="" data-readonly="true" placeholder="3" value="3">
                                                            <div class="input-group-addon"><i class="fa fa-percent"></i></div>
                                                          </div>
                                                        </div>

                                                      </div>

                                                      <div class="col-md-4">    

                                                          <div class="form-group">
                                                            <label for="rateOfReturn">Rate of Return ?</label>
                                                            <label class="sr-only" for="rateOfReturn">Rate of Return ?</label>
                                                            <div class="input-group">
                                                              <!-- <div class="input-group-addon"><i class="fa fa-dollar"></i></div> -->
                                                              <input type="text" class="form-control input-lg" data-group="life" id="rateOfReturn" data-name="rateOfReturn" data-required="false" data-format="percent" data-error="" data-readonly="false" placeholder="6" value="6">
                                                              <div class="input-group-addon"><i class="fa fa-percent"></i></div>
                                                            </div>
                                                          </div>                                                           

                                                      </div><!-- col -->

                                                      <div class="col-md-4">    

                                                          <div class="form-group">
                                                            <label for="inflationRate">Rate of Inflation ?</label>
                                                            <label class="sr-only" for="inflationRate">Rate of Inflation ?</label>
                                                            <div class="input-group">
                                                              <!-- <div class="input-group-addon"><i class="fa fa-dollar"></i></div> -->
                                                              <input type="text" class="form-control input-lg" data-group="life" id="inflationRate" data-name="inflationRate" data-required="false" data-format="percent" data-error="" data-readonly="false" placeholder="3" value="3">
                                                              <div class="input-group-addon"><i class="fa fa-percent"></i></div>
                                                            </div>
                                                          </div>                                                           

                                                      </div><!-- col -->
                                                  
                                                  </div><!-- row -->

                                                  <div class="form-group">
                                                    <label class="useful-text" for="lifeInsuranceNeeded">INITIAL LIFE INSURANCE NEEDED TO REPLACE INCOME<br>(BEFORE OTHER CALCULATIONS)</label>
                                                    <label class="sr-only" for="lifeInsuranceNeeded">INITIAL LIFE INSURANCE NEEDED TO REPLACEME INCOME<br>(BEFORE OTHER CALCULATIONS)</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="toReplace" id="lifeInsuranceNeeded" data-name="lifeInsuranceNeeded" data-required="false" data-format="float" data-error="" data-readonly="true" placeholder="0.00" value="0.00">
                                                      <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                                    </div>
                                                  </div>                                                                                                                                       

                                                </form>
                                                

                                            </div><!-- form-container -->

                                        </div>
                                    </div>
                                </div><!-- income-to-replace -->

                                <div class="sect avail-invest_fam-assets">
                                    <h2>Available Investible<br>Family Assets</h2>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="form-container">

                                                <form class="main-form">
                                                  
                                                  <div class="form-group">
                                                    <label class="" for="">Savings ?</label>
                                                    <label class="sr-only" for="">Savings ?</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="familyAssets" id="savings" data-name="savings" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                                      <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                                    </div>
                                                  </div>
                                                  
                                                  <div class="form-group">
                                                    <label class="" for="investment">Investment Portfolio ?</label>
                                                    <label class="sr-only" for="investment">Investment Portfolio ?</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="familyAssets" id="investment" data-name="investment" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                                      <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                                    </div>
                                                  </div>                                             

                                                  <div class="form-group">
                                                    <label class="" for="lifeInsurance">Current Life Insurance ?</label>
                                                    <label class="sr-only" for="lifeInsurance">Current Life Insurance ?</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="familyAssets" id="lifeInsurance" data-name="lifeInsurance" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                                      <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                                    </div>
                                                  </div>                                                
                                                  
                                                  <div class="form-group">
                                                    <label class="" for="other">Other Assets ?</label>
                                                    <label class="sr-only" for="other">Other Assets ?</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="familyAssets" id="other" data-name="other" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                                      <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                                    </div>
                                                  </div>                                                                                                                                        
                                                  
                                                  <div class="form-group">
                                                    <label class="useful-text" for="totalAvailAsset">TOTAL AVAILABLE ASSETS</label>
                                                    <label class="sr-only" for="totalAvailAsset">TOTAL AVAILABLE ASSETS</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="familyAssets" id="totalAvailAsset" data-name="totalAvailAsset" data-required="false" data-format="float" data-error="" data-readonly="true" placeholder="0.00" value="0.00">
                                                      <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                                    </div>
                                                  </div>                                                 

                                                </form>
                                                

                                            </div><!-- form-container -->

                                        </div>
                                    </div>
                                </div><!-- avail-invest_fam-assets -->

                                <div class="sect debt-replacement">

                                    <h2>Debt Replacement</h2>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="form-container">

                                                <form class="main-form">

                                                  <div class="form-group">
                                                    <label class="text" for="mortgage">Mortgage ?</label>
                                                    <label class="sr-only" for="mortgage">Mortgage ?</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="debt" id="mortgage" data-name="mortgage" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                                      <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                                    </div>
                                                  </div>                                                  

                                                  <div class="form-group">
                                                    <label class="text" for="autoLoan">Auto Loan ?</label>
                                                    <label class="sr-only" for="autoLoan">Auto Loan ?</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="debt" id="autoLoan" data-name="autoLoan" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                                      <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                                    </div>
                                                  </div>   

                                                  <div class="form-group">
                                                    <label class="text" for="consumerDebt">Consumer Debt ?</label>
                                                    <label class="sr-only" for="consumerDebt">Consumer Debt ?</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="debt" id="consumerDebt" data-name="consumerDebt" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                                      <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                                    </div>
                                                  </div>   

                                                  <div class="form-group">
                                                    <label class="text" for="otherDebt">Other Debt</label>
                                                    <label class="sr-only" for="otherDebt">Other Debt</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="debt" id="otherDebt" data-name="otherDebt" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                                      <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                                    </div>
                                                  </div>   

                                                  <div class="form-group">
                                                    <label class="important-text" for="totalDebt">TOTAL DEBT</label>
                                                    <label class="sr-only" for="totalDebt">TOTAL DEBT</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="debt" id="totalDebt" data-name="totalDebt" data-required="false" data-format="float" data-error="" data-readonly="true" placeholder="0.00" value="0.00">
                                                      <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                                    </div>
                                                  </div>   

                                                </form>
                                                

                                            </div><!-- form-container -->

                                        </div>
                                    </div>

                                </div><!--  debt-replacement -->

                                <div class="sect college-funding">

                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2>College Funding</h2>
                                            <p>
                                                According to the College&#44; college costs increase an average of 6% per year. If the insured died tomorrow ROI could be used&#44; however it is not used here because if the insured lived 5&#44; 10&#44; 15 years or more&#44; the amount of money from the insurance proceeds for college would be significantly less than what would be needed&#44; consequently&#44; we used only the 6% college inflation factor for Net Future Value (NFV). We are also assuming there is no direct savings for college happening.
                                            </p>

                                            <button type="button" class="info-text">Note: According to the College Board the 2015-2016 average 4 year college cost including Tuition&#44; Fees&#44; Room &amp; Board is: Private $180&#44;680; Public $84&#44;816</button>
                                        </div>
                                    </div>    

                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            <div class="form-container">

                                                <form class='college-form'>

                                                  <div class="form-group">
                                                    <div class="inner-addon left-addon left-textfield-icon">
                                                        <select class="form-control children-select">
                                                          <option selected="selected">Number of Children</option>
                                                          <option>0</option>
                                                          <option>1</option>
                                                          <option>2</option>
                                                          <option>3</option>
                                                          <option>4</option>
                                                          <option>5</option>
                                                        </select>
                                                    </div>
                                                  </div><!-- form-group -->

                                                                                   
                                                </form>
                                            
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="children-container"></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="childrens-total-container">
                                                            
                                                            <span class="childrens-totals" id="totalCollegeCosts" data-readonly="true">
                                                                
                                                            </span>

                                                        </div>
                                                    </div>
                                                </div><!-- row -->

                                            </div><!-- form-container -->

                                        </div><!-- col -->

                                        
                                    </div><!-- row -->

                                </div><!-- college-funding -->

                                <div class="sect other-expenses">

                                    <h2>Other Expenses</h2>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="form-container">

                                                <form class="main-form">

                                                  <div class="form-group">
                                                    <label class="text" for="funeral">Funeral (typical cost of a funeral is approx. $5,000 ?</label>
                                                    <label class="sr-only" for="funeral">Funeral (typical cost of a funeral is approx. $5,000 ?</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="other" id="funeral" data-name="funeral" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                                      <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                                    </div>
                                                  </div>                                                    

                                                  <div class="form-group">
                                                    <label class="text" for="bequests">Special Bequests ?</label>
                                                    <label class="sr-only" for="bequests">Special Bequests ?</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="other" id="bequests" data-name="bequests" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                                      <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                                    </div>
                                                  </div>      

                                                  <div class="form-group">
                                                    <label class="text" for="otherExpenses">Other Expenses ?</label>
                                                    <label class="sr-only" for="otherExpenses">Other Expenses ?</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="other" id="otherExpenses" data-name="otherExpenses" data-required="false" data-format="float" data-error="" data-readonly="false" placeholder="0.00" value="0.00">
                                                      <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                                    </div>
                                                  </div>   

                                                  <div class="form-group">
                                                    <label class="important-text" for="totalExpenses">TOTAL EXPENSES</label>
                                                    <label class="sr-only" for="totalExpenses">TOTAL EXPENSES</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="other" id="totalExpenses" data-name="totalExpenses" data-required="false" data-format="float" data-error="" data-readonly="true" placeholder="0.00" value="0.00">
                                                      <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                                    </div>
                                                  </div>     

                                                </form>

                                            </div><!-- form-container -->

                                        </div>
                                    </div>

                                </div><!--  other-expenses -->



                                <div class="sect total-insur-needed">

                                    <!-- <h2>Total Insurance Needed</h2> -->
                                    <br><br>

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="form-container">

                                                <form class="main-form">

                                                  <div class="form-group">
                                                    <label class="text" for="totalPart1">Income Replacement Insurance Needed (Part I)</label>
                                                    <label class="sr-only" for="totalPart1">Income Replacement Insurance Needed (Part I)</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="total" id="totalPart1" data-name="totalPart1" data-required="false" data-format="float" data-error="" data-readonly="true" placeholder="0.00" value="0.00">
                                                      <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                                    </div>
                                                  </div>                                                    

                                                  <div class="form-group">
                                                    <label class="text" for="totalPart2">Total Additional Expenses (Part II)</label>
                                                    <label class="sr-only" for="totalPart2">Total Additional Expenses (Part II)</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                                      <input type="text" class="form-control input-lg" data-group="total" id="totalPart2" data-name="totalPart2" data-required="false" data-format="float" data-error="" data-readonly="true" placeholder="0.00" value="0.00">
                                                      <!-- <div class="input-group-addon"><i class="fa fa-percent"></i></div> -->
                                                    </div>
                                                  </div>                                                    

                                                  <div class="total-life-insurance-big-box">

                                                    <span class="header">Total Insurance Needed</span>

                                                    <h2>$<span id="totalNeededBigDisplay"></span><br>&nbsp; <a href="/"><span class="inline-button">Click Here to Get A Quote</span></a></h2>
        
                                                  </div><!-- total-life-insurance-big-box -->
                                                                                   
                                                </form>
                                                

                                            </div><!-- form-container -->

                                        </div>
                                    </div>

                                </div><!-- total-insur-needed -->

                            </div><!-- body -->
                        </div>


                    </div><!-- row -->

                </div><!-- needs-analyzer -->

            </div><!-- needs-analyzer-container -->
        </div>
    </div>

   
</section>

<!--<div class="content">

    <section class="stellar-section">
      
            <div class="thumb-box thumb-box4 y-max" data-type="background" data-speed="2">

                <div class="container">

                    <div class="row">
                        
                        <div class="col-md-9">

                            <div class="steller-contents">
                                <p class="wow fadeInLeft">Term Life Quote <br> the intelligent way to purchase term life insurance</p>
                            </div>                            

                        </div>

                        <div class="col-md-3">

                            <div class="steller-contents buttom-thumb-box">
                                <a href="Home.html" class="wow zoomIn animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                                    <span class="fa fa-comments-o"></span>
                                    <br>Get A<br>Quote Now!
                                </a>
                            </div>                            
                            
                        </div>

                    </div>


                </div>

            </div>
      
    </section>

</div>-->

<footer> 
    <div class="container">
        <p class="wow fadeIn"><span>AgentQuote.com</span> &copy; <em id="copyright-year"></em> | <a href="index-5.html">Privacy Policy</a></p>
        <ul class="wow fadeIn" data-wow-delay="0.1s">
	        <? if( strlen(fd3_get_link_type('fblink'))) : ?>
															<li><a href="<?= fd3_get_link_type('fblink'); ?>" target="_blank"><img src="<?php echo aq2emm_get_template_directory_uri() . '/img/follow_icon1.png'; ?>" alt=""></a></li>
	        <? endif; ?>
	
	        <? if( strlen(fd3_get_link_type('twitterlink'))) : ?>
															<li><a href="<?= fd3_get_link_type('twitterlink'); ?>" target="_blank"><img src="<?php echo aq2emm_get_template_directory_uri() . '/img/follow_icon3.png'; ?>" alt=""></a></li>
	        <? endif; ?>
	
	        <? if( strlen(fd3_get_link_type('gpluslink'))) : ?>
															<li><a href="<?= fd3_get_link_type('gpluslink'); ?>" target="_blank"><img src="<?php echo aq2emm_get_template_directory_uri() . '/img/follow_icon4.png'; ?>" alt=""></a></li>
	        <? endif; ?>        </ul>
    </div>
</footer><!-- footer -->

<script>
  function include(url){ 
    src = '<?= FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/microsite_templates' ?>/js/'+ url;
    s = '<script src="' + src + '">';
    s = s + '<\/script>';

    document.write( s ); 
    return false ;
  }
</script>



<script src="<?= FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/microsite_templates' . '/js/jquery.js'; ?>"></script>
<script src="<?= FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/microsite_templates' . '/js/jquery-migrate-1.2.1.min.js'; ?>"></script>
<!-- required by camera -->
<script src="<?= FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/microsite_templates' . '/js/jquery.easing.1.3.js'; ?>"></script>
<script src="<?= FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/microsite_templates' . '/js/jquery.mobile.customized.min.js'; ?>"></script>

<script src="<?= FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/microsite_templates' . '/js/jquery.mobilemenu.js'; ?>"></script>
<script src="<?= FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/microsite_templates' . '/js/jquery.equalheights.js'; ?>"></script>

<!--[if (gt IE 9)|!(IE)]><!-->
<!-- Licensed to Frank Decker -->
<script src="<?= FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/microsite_templates' . '/js/wow/wow.js'; ?>"></script>

<script src="<?= FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/microsite_templates' . '/js/wow/device.min.js'; ?>"></script>

<script src="<?= FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/microsite_templates' . '/js/aq-scripts.js?ver=1.0.0'; ?>"></script>

<!-- ### -->

<?php get_dynamic_pages_template_part( aq2emm_selected_theme().'partials/calc', 'css' ); ?>

<script>
		jQuery(document).ready(function () {
				if ($('html').hasClass('desktop')) {
						new WOW().init();
				}
		});
</script>

</body>
</html>