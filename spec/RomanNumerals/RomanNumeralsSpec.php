<?php namespace spec\RomanNumerals;

use RomanNumerals\RomanNumerals;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RomanNumerals::class);
    }

    public function it_returns_i_for_1()
    {
        $this->convert(1)->shouldReturn("I");
    }

    public function it_returns_ii_for_2()
    {
        $this->convert(2)->shouldReturn("II");
    }

    public function it_returns_iii_for_3()
    {
        $this->convert(3)->shouldReturn("III");
    }

    public function it_returns_iv_for_4()
    {
        $this->convert(4)->shouldReturn("IV");
    }

    public function it_returns_v_for_5()
    {
        $this->convert(5)->shouldReturn("V");
    }

    public function it_returns_vi_for_6()
    {
        $this->convert(6)->shouldReturn("VI");
    }

    public function it_returns_vii_for_7()
    {
        $this->convert(7)->shouldReturn("VII");
    }

    public function it_returns_viii_for_8()
    {
        $this->convert(8)->shouldReturn("VIII");
    }

    public function it_returns_ix_for_9()
    {
        $this->convert(9)->shouldReturn("IX");
    }

    public function it_returns_x_for_10()
    {
        $this->convert(10)->shouldReturn("X");
    }

    public function it_returns_xi_for_11()
    {
        $this->convert(11)->shouldReturn("XI");
    }

    public function it_returns_xv_for_15()
    {
        $this->convert(15)->shouldReturn("XV");
    }

    public function it_returns_xvi_for_16()
    {
        $this->convert(16)->shouldReturn("XVI");
    }

    public function it_returns_xx_for_20()
    {
        $this->convert(20)->shouldReturn("XX");
    }

    public function it_returns_xxi_for_21()
    {
        $this->convert(21)->shouldReturn("XXI");
    }

    public function it_returns_xxx_for_30()
    {
        $this->convert(30)->shouldReturn("XXX");
    }

    public function it_returns_xl_for_40()
    {
        $this->convert(40)->shouldReturn("XL");
    }

    public function it_returns_l_for_50()
    {
        $this->convert(50)->shouldReturn("L");
    }

    public function it_returns_lx_for_60()
    {
        $this->convert(60)->shouldReturn("LX");
    }

    public function it_returns_ic_for_99()
    {
        $this->convert(99)->shouldReturn("XCIX");
    }

    public function it_returns_c_for_100()
    {
        $this->convert(100)->shouldReturn("C");
    }

    public function it_returns_cdxcix_for_499()
    {
        $this->convert(499)->shouldReturn("CDXCIX");
    }

    public function it_returns_d_for_500()
    {
        $this->convert(500)->shouldReturn("D");
    }

    public function it_returns_cmxcix_for_999()
    {
        $this->convert(999)->shouldReturn("CMXCIX");
    }

    public function it_returns_m_for_1000()
    {
        $this->convert(1000)->shouldReturn("M");
    }

    public function it_returns_mcmxcix_for_1999()
    {
        $this->convert(1999)->shouldReturn("MCMXCIX");
    }

    public function it_returns_mmxvii_for_2017()
    {
        $this->convert(2017)->shouldReturn("MMXVII");
    }

    public function it_returns_mmmmcmxc_for_4990()
    {
        $this->convert(4990)->shouldReturn("MMMMCMXC");
    }

    public function it_returns_mmmmcmxcix_for_4999()
    {
        $this->convert(4999)->shouldReturn("MMMMCMXCIX");
    }
}
